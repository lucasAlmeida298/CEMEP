#include <stdio.h> //bibliota
#include <locale.h> //acentuação do português
main()//principal
{  // declaração de variáveis
	setlocale(LC_ALL,"Portuguese");
	char nome[20];
    int idade;
	float mesada;
	//entrada de dados
	printf ("Digite o seu nome:");
	scanf("%s",&nome);
	printf("\n Digite a sua idade:");
	scanf ("%i",&idade);
	printf("\n Digite a sua mesada:");
	scanf("%f",&mesada);
	//saída de dadps
	printf ("O nome digitado foi %s",nome);
	printf ("\n A idade digitada foi %i",idade);
	printf ("\n A mesada digitada foi %.2f",mesada);
}
