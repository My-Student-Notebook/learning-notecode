#include <stdio.h>
#include <stdlib.h>
#include <locale.h>


void potencia(int* resultado, int a, int b) {
    *resultado = 1;
    for(int i = 0; i < b; i++) {
        *resultado = *resultado * a;
    }
}

int main(){
	int resultado;
potencia(&resultado, 10, 5);
	printf("Resultado %d\n", resultado);
}