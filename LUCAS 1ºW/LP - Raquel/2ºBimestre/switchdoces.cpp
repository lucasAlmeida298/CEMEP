//Programa desenvolvido por Lucas Almeida 1ºW
/* Programa venda de doces*/ 
#include <stdio.h>
#include <locale.h>
#include <ctype.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	int doces;
	printf ("Menu dos doces: \n1- Brigadeiro \n2- Beijinho \n3- Palha italiana");
	printf ("\n4- Morango do amor \n5- Bicho de pé \n6- Paçoca");
    printf ("\n7- Picolé");
    printf ("\nDigite o número referente ao doce que deseja: ");
	scanf ("%i",&doces);
	
	switch (doces)
	{
		case 1: printf ("Você escolheu brigadeiro!\n"); break;
		case 2: printf ("Você escolheu beijinho!\n"); break;
		case 3: printf ("Você escolheu palha italiana\n"); break;
		case 4: printf ("Você escolheu morango do amor\n"); break;
		case 5: printf ("Você escolheu bicho de pé\n"); break;
		case 6: printf ("Você escolheu paçoca\n"); break;
		case 7: printf ("Você escolheu picolé\n"); break;
		default: printf ("Essa opção não existe no menu");
	}
}
