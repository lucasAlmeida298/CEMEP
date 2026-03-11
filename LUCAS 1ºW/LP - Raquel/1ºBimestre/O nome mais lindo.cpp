#include <stdio.h> //delcara biblioteca
#include <locale.h> //declara biblioteca para acentuar
main() //principal
{ //início do programa
	setlocale(LC_ALL,"Portuguese");
	char nome[20];
	printf ("Digite seu nome:");
	scanf("%s",&nome);
	printf("O nome mais lindo do mundo é: %s",nome);
}//fim do programa
