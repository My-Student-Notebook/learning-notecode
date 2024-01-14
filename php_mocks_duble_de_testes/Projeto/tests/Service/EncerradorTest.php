<?php

namespace Alura\Leilao\Tests\Domain;

use Alura\Leilao\Dao\Leilao as LeilaoDao;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Service\Encerrador;
use Alura\Leilao\Service\EnviadorDeEmail;
use PHPUnit\Framework\TestCase;

class EncerradorTest extends TestCase
{
    private $encerrador;
    private $enviadorDeEmailMock;

    protected function setUp(): void
    {
        $leilaoFiat = new Leilao('Fiat 147 0Km', new \DateTimeImmutable('8 days ago'));
        $leilaoVariante = new Leilao('Variante 0Km', new \DateTimeImmutable('10 days ago'));

        $leilaoDaoMock = $this->createMock(LeilaoDao::class);
        $leilaoDaoMock->method('recuperarFinalizados')
            ->willReturn([$leilaoFiat, $leilaoVariante]);

        $leilaoDaoMock->expects(self::once())
            ->method('recuperarNaoFinalizados')
            ->willReturn([$leilaoFiat, $leilaoVariante]);

        $leilaoDaoMock->expects(self::exactly(2))
            ->method('atualiza')
            ->withConsecutive(
                [$leilaoFiat],
                [$leilaoVariante]
            );

        $this->enviadorDeEmailMock = $this->getMockBuilder(EnviadorDeEmail::class)->getMock();

        $this->encerrador = new Encerrador($leilaoDaoMock, $this->enviadorDeEmailMock);
    }

    public function testDeveEncerrarLeiloesComMaisDeUmaSemana()
    {
        $this->encerrador->encerra();

        $leiloesEncerrados = $this->leilaoDao->recuperarFinalizados();

        static::assertCount(2, $leiloesEncerrados);
        static::assertTrue($leiloesEncerrados[0]->estaFinalizado());
        static::assertTrue($leiloesEncerrados[1]->estaFinalizado());
        static::assertEquals(
            'Fiat 147 0Km',
            $leiloesEncerrados[0]->recuperarDescricao()
        );
        static::assertEquals(
            'Variante 0Km',
            $leiloesEncerrados[1]->recuperarDescricao()
        );
    }

    public function testDeveContinuarOProcessoamentoAoEncontrarErroAoEnviarEmail()
    {
        $e = new \DomainException('Erro ao enviar e-mail');

        $this->enviadorDeEmailMock->expects(self::exactly(2))
            ->method('notificaTerminoLeilao')
            ->willThrowException($e);

        $this->encerrador->encerra();
    }

    public function testSoDeveEnviarLeilaoPorEmailAposFinalizado()
    {
        $this->enviadorDeEmailMock->expects(self::exactly(2))
            ->method('notificaTerminoLeilao')
            ->willReturnCallback(function (Leilao $leilao) {
                self::assertTrue($leilao->estaFinalizado());
            });

        $this->encerrador->encerra();
    }
}
