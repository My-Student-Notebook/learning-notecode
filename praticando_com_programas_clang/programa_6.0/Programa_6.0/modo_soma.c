#include <stdio.h>
#include <stdlib.h>
#include <Windows.h>
#include <math.h>
#include "modo_soma.h"

double calculo;
double valor;
int qtd;

void ui1_1_1() {

	printf("\nAgora voce esta no modo soma!\n");

	Sleep(450);

	printf("Quantos valores deseja somar?\n");

	Sleep(450);

	scanf("%d", &qtd);

	for (int vezes = 1; vezes <= qtd; vezes++) {

		printf("\nInsira o valor:\n");

		Sleep(450);

		printf("Valor %d de %d\n", vezes, qtd);

		Sleep(450);

		scanf("%lf", &valor);

		calculo = calculo + valor;

	}

	Sleep(900);
	printf("\n\n\n");

	printf("Resultado: %.4lf", calculo);

	printf("\n\n\n");
}