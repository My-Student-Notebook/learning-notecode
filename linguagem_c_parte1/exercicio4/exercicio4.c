#include <stdio.h>

int main(){
	int soma = 0;
	for(int numero = 1; numero <= 100; numero++){
		soma = soma + numero;
	}
	printf("O resultado da soma é %d \n", soma);
	printf("Acabou aqui! :)");

}