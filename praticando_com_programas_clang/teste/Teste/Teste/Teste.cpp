#include <stdio.h>
#include <windows.h>
#include <stdlib.h>
#include <math.h>
#include <string.h>
#include <complex.h>

#define sleep(n) Sleep(n * 1000)

int main() {

	int i;
	char *display = "|/-\\-" ;

	printf("Aguarde  ");
	for (i = 0; i < 15; ++i) {
		printf("\b%c\7", display[i % 5]);
		sleep(1);
	}
	printf("\rTerminado.                              \n");
	sleep(3);

}