#include <stdio.h>

int main(){
	int x;

	int y;

	printf("Digita o primeiro número. ");
	scanf("%d", &x);

	printf("Digita o segundo número. ");
	scanf("%d", &y);

	int z = x * y;
	printf("O resultado é %d", z);
} 