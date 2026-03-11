//Programa desenvolvido por Lucas Almeida 1ºW
/* Programa venda de salgados*/ 
#include <stdio.h>
#include <locale.h>
#include <ctype.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	int salgados;
	printf ("Menu dos salgados: \n1- Coxinha \n2- Salsicha \n3- Presunto e queijo");
	printf ("\n4- Pizza \n5- Hamburguer \n6- Croissant");
    printf ("\n7- Empada");
    printf ("\nDigite o número referente ao salgado que deseja: ");
	scanf ("%i",&salgados);
	
	switch (salgados)
	{
		case 1: printf ("Você escolheu coxinha!\n"); break;
		case 2: printf ("Você escolheu salsicha!\n"); break;
		case 3: printf ("Você escolheu presunto e queijo\n"); break;
		case 4: printf ("Você escolheu pizza\n"); break;
		case 5: printf ("Você escolheu hamburguer\n"); break;
		case 6: printf ("Você escolheu croissant\n"); break;
		case 7: printf ("Você escolheu empada\n"); break;
		default: printf ("Essa opção não existe no menu");
	}
}
