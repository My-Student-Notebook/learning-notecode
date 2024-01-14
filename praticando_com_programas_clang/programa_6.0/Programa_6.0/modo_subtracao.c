#include <stdio.h>
#include <stdlib.h>
#include <Windows.h>
#include <math.h>
#include "modo_subtracao.h"

double calculo_2;
double valor_2;
double valor_sub;
int qtd_2;

void ui1_1_2() {

	printf("\nAgora voce esta no modo subtracao!\n");

	Sleep(450);

	printf("Qual valor sera subtraido?\n");

	Sleep(450);

	scanf("%lf", &valor_sub);

	printf("\nQuantos valores deseja subtrair de %lf?\n", valor_sub);

	Sleep(450);

	scanf("%d", &qtd_2);

	for (int vezes_2 = 1; vezes_2 <= qtd_2; vezes_2++) {

		printf("\nInsira o valor:\n");

		Sleep(450);

		printf("Valor %d de %d\n", vezes_2, qtd_2);

		Sleep(450);

		scanf("%lf", &valor_2);
		
		valor_sub = valor_sub - valor_2;
	}
	calculo_2 = valor_sub;

	Sleep(900);

	printf("\n\n\n");

	printf("Resultado: %.4lf", calculo_2);

	printf("\n\n\n");

}