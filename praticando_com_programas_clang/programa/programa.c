#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(){
	setlocale(LC_ALL,"portuguese");

	int repeticoes;

	float operacao;

	float soma;

	printf("\nInsira o numero de repeticoes desejadas:\n");
	scanf("%d", &repeticoes);

	int contagemdevezes = 1;

	while(contagemdevezes <= repeticoes){
		printf("\nInsira um valor para uma soma que esta em sua mente!\n");
			scanf("%f", &soma);
			 	operacao = operacao + soma;	
			 		contagemdevezes++;
	}	
  printf("%.3f", operacao);
	
}

// variaiveis = char   --> 1 byte   = 8 bits
//              float  --> 4 bytes  = 32 bits
//              double --> 8 bytes  = 64 bits
//              int    --> 4 bytes  = 32 bits
//              long   --> 4 bytes  = 32 bits
//              short  --> 2 bytes  = 16 bits
//         long double --> 12 bytes = 128 bits