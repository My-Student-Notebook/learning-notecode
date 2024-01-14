#include <stdio.h>

void escolhepalavra(){
	FILE* f;
	fscanf("palavras.txt", "r");

	if(f == 0){
        printf("Banco de dados inexistente!");
        exit(1);
    }
}

int main(){


}
