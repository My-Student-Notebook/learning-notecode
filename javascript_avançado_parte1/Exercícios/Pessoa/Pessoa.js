class Pessoa {

    constructor(nome, sobrenome) {

        this.nome = nome;
        this.sobrenome = sobrenome;
    }

    obtemNomeCompleto(nome, sobrenome) {
        return console.log('Nome completo: ' + nome + ' ' + sobrenome);
    }
}