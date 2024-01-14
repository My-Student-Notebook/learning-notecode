#include <stdio.h>
#include <stdlib.h>
#include <Windows.h>
#include <math.h>
#include "matrizes.h"

void imprime_matriz() {

	for (int r = 0; r < 4; r++) {
		for (int s = 0; s < 16; ++s) {
			printf("%c", matriz1[r][s]);
			Sleep(100);
		}
	}

}
int main() {
	imprime_matriz();
}
