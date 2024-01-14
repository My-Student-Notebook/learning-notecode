#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(){
	setlocale(LC_ALL, "Portuguese");

	double valor;

	short limite;

	double divisor;

	printf("Calcule sua media escolar!\n");

	printf("Insira a quantidades de valores que deseja inserir.");

	printf("Insira o valor!\n");

	scanf("%f\n", &valor);

	printf("Quer dividir por quanto o total?");

	scanf("%f\n", &divisor);

	double soma = 0;

	soma = soma + valor;

	double operacao = soma / divisor;

	printf("%f\n", operacao);
}