describe("MaiorEMenor", function() {

  it("deve entender números em ordem não sequencial", function() {

    var algoritmo = new MaiorEMenor();

    algoritmo.encontra([6, 10, 7, 8]);

    expect(algoritmo.pegaMenor()).toEqual(6);
    expect(algoritmo.pegaMaior()).toEqual(10);

  });

  it("deve entender números em ordem decrescente", function() {

    var algoritmo = new MaiorEMenor();

    algoritmo.encontra([100, 99, 98, 97]);

    expect(algoritmo.pegaMenor()).toEqual(97);
    expect(algoritmo.pegaMaior()).toEqual(100);

  });

  it("deve entender números em ordem crescente", function() {

    var algoritmo = new MaiorEMenor();

    algoritmo.encontra([10, 11, 12, 13]);

    expect(algoritmo.pegaMenor()).toEqual(10);
    expect(algoritmo.pegaMaior()).toEqual(13);

  });

  it("deve entender um array com um número único", function() {

    var algoritmo = new MaiorEMenor();

    algoritmo.encontra([1]);

    expect(algoritmo.pegaMenor()).toEqual(1);
    expect(algoritmo.pegaMaior()).toEqual(1);

  });

});