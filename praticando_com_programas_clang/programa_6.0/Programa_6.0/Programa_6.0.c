#include <stdio.h>
#include <stdlib.h>
#include <Windows.h>
#include "Programa_6.0.h"
#include "ui1.h"

int selecionado;

void config_1 () {

	scanf("%d", &selecionado);

	switch (selecionado) {
		case 1:
			ui1();
			break;
		case 2:
			//ui2
			break;
		case 3:
			//ui3
			break;
		case 4:
			//ui4
			break;
		case 5:
			//ui5
			break;
		default:
			printf("\nOpcao indisponivel no momento...\n");
	}
}

void inicialização() {

	printf("\nSeja bem vindo ao sistema inteligente da Humbanew!\n");

	Sleep(450);

	printf("Escolha uma das opcoes para seguir adiante\n\n");

	Sleep(900);

	printf("Opcoes: 1 => Calculadora Comum""\n");

	Sleep(450);

	printf("        2 => Calculadora Cientifica""\n");

	Sleep(450);

	printf("        3 => Bloco de Notas""\n");

	Sleep(450);

	printf("        4 => Criador de Matrizes""\n");

	Sleep(450);

	printf("        5 => Decodificador de Codigos""\n");

	config_1();
}

void inicialização_2() {

	printf("\nSeja bem vindo de volta ao Menu Iniciar!\n");

	Sleep(450);

	printf("Escolha uma das opcoes para seguir adiante\n\n");

	Sleep(900);

	printf("Opcoes: 1 => Calculadora Comum""\n");

	Sleep(450);

	printf("        2 => Calculadora Cientifica""\n");

	Sleep(450);

	printf("        3 => Bloco de Notas""\n");

	Sleep(450);

	printf("        4 => Criador de Matrizes""\n");

	Sleep(450);

	printf("        5 => Decodificador de Codigos""\n");

	config_1();
}

int main() {
	inicialização();


}