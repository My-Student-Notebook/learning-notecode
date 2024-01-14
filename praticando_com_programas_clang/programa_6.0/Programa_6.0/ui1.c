#include <stdio.h>
#include <stdlib.h>
#include <Windows.h>
#include "ui1.h"
#include "modo_soma.h"
#include "modo_subtracao.h"
#include "modo_multiplicacao.h"
#include "modo_divisao.h"

int selecionado_2;
int selecionado_3;

void ui1() {

	printf("\nSeja bem vindo a Calculadora Comum!\n");

	Sleep(450);

	printf("Selecione a maneira de fazer os calculos nas opcoes a seguir!\n");

	Sleep(450);

	printf("\nOpcoes: 0 => Voltar ao Menu Iniciar\n");

	Sleep(450);

	printf("        1 => Modo Diferente\n");

	Sleep(450);

	printf("        2 => Modo Comum\n");

	config_2();
}

void ui1_1() {

	printf("\nSelecione um modo a seguir:\n");

	Sleep(450);

	printf("\nOpcoes: 0 => Voltar\n");

	Sleep(450);

	printf("        1 => Modo Soma\n");

	Sleep(450);

	printf("        2 => Modo Subtracao\n");

	Sleep(450);

	printf("        3 => Modo Multiplicacao\n");

	Sleep(450);

	printf("        4 => Modo Divisao\n");

	Sleep(450);

	printf("        5 => Modo Raiz Quadrada\n");

	Sleep(450);

	printf("        6 => Modo Potencia\n");

	config_3();
}

void config_2() {

	scanf("%d", &selecionado_2);


	switch (selecionado_2) {
		case 0:
			inicialização_2();
			break;
		case 1:
			ui1_1();
			break;
		case 2:
			//ui1_2();
			break;
		default:
			printf("\nOpcao inexistente!\n");
	}
}

void config_3() {

	scanf("%d", &selecionado_3);

	switch (selecionado_3) {
		case 0:
			ui1();
			break;
		case 1:
			ui1_1_1();
			break;
		case 2:
			ui1_1_2();
			break;
		case 3:
			ui1_1_3();
			break;
		case 4:
			ui1_1_4();
			break;
		case 5:
			//ui1_1_5();
			break;
		case 6:
			//ui1_1_6();
			break;
		default:
			printf("\nOpcao inexistente!\n");
			break;
	}
}