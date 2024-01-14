#include <stdio.h>
#include <stdlib.h>
#include <Windows.h>
#include <math.h>
#include "modo_divisao.h"

double calculo_4;
double valor_4;
double valor_div;
int qtd_4;

void ui1_1_4() {

	printf("\nAgora voce esta no modo divisao!\n");

	Sleep(450);

	printf("Qual valor sera dividido?\n");

	Sleep(450);

	scanf("%lf", &valor_div);

	printf("\nQuantos valores deseja dividir de %lf?\n", valor_div);

	Sleep(450);

	scanf("%d", &qtd_4);

	for (int vezes_4 = 1; vezes_4 <= qtd_4; vezes_4++) {

		printf("\nInsira o valor:\n");

		Sleep(450);

		printf("Valor %d de %d\n", vezes_4, qtd_4);

		Sleep(450);

		scanf("%lf", &valor_4);

		valor_div = valor_div / valor_4;
	}
	calculo_4 = valor_div;

	Sleep(900);

	printf("\n\n\n");

	printf("Resultado: %.4lf", calculo_4);

	printf("\n\n\n");

}