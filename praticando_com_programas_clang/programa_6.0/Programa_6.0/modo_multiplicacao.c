#include <stdio.h>
#include <stdlib.h>
#include <Windows.h>
#include <math.h>
#include "modo_multiplicacao.h"

double calculo_3;
double valor_3;
int qtd_3;

void ui1_1_3() {

	printf("\nAgora voce esta no modo multiplicacao!\n");

	Sleep(450);

	printf("Quantos valores deseja multiplicar?\n");

	Sleep(450);

	scanf("%d", &qtd_3);

	calculo_3 = 1;

	for (int vezes_3 = 1; vezes_3 <= qtd_3; vezes_3++) {

		printf("\nInsira o valor:\n");

		Sleep(450);

		printf("Valor %d de %d\n", vezes_3, qtd_3);

		Sleep(450);

		scanf("%lf", &valor_3);

		calculo_3 = calculo_3 * valor_3;

	}

	Sleep(900);

	printf("\n\n\n");

	printf("Resultado: %.4lf", calculo_3);

	printf("\n\n\n");
}