#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <time.h>
#include <windows.h>

int num_tab;
int vezes;
int op;
char estorna;

void montatabuada() {
	printf("\nInsira qual tabuada desejar montar:\n");
	scanf("%d", &num_tab);

	printf("\nInsira o maximo de vezes que deseja multiplicar o %d\n", num_tab);
	scanf("%d", &vezes);

	Sleep(8);

	printf("\nA tabuada do %d e:\n", num_tab);
	for (int x = 0; x <= vezes; x++) {
		op = x * num_tab;
		printf("\n%d * %d = %d\n", num_tab, x, op);
		Sleep(500);
	}
}

int main() {
	printf("\nSeja Bem-Vindo! :}\n");

	montatabuada();
}