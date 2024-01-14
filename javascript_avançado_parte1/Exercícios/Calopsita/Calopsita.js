class Calopsita {

    constructor(nome, raca) {

        this._nome = nome;
        this._raca = raca;
    }

    get nome() {
        return this._nome;
    }

    get raca() {
        return this._raca;
    }
}