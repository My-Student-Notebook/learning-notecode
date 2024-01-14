#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(void){
	setlocate(LC_ALL,"Portuguese");

	int multiplicador;
    printf("Escreva seu multiplicador!");
	scanf("%d\n", &multiplicador);

	for(int vezes = 1; vezes < 11; vezes++){
		int resultado = multiplicador * vezes;
			printf("%d x %d = " " %d\n", multiplicador, vezes, resultado);
	}
	
}