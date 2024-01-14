<?php

namespace Alura\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $httpClient;
    private $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {

        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {
        try {
            $resposta = $this->httpClient->request('GET', $url);
        } catch (GuzzleException $e) {
        }

        $html = $resposta->getBody();

        $crawler = new Crawler();
        $crawler->addHtmlContent($html);

        $elemnetosCursos = $this->crawler->filter('span.card-curso__nome');
        $cursos = [];

        foreach ($elemnetosCursos as $elemento)
        {
            $cursos[] = $elemento->textContent;
        }

        return $cursos;
    }
}