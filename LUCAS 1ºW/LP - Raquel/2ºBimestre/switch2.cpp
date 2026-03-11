//Programa desenvolvido por Lucas Almeida 1ºW
/* Programa placa de um véiculo convertido para switch case
que informa o dia do rodízio de um veículo*/ 
#include <stdio.h>
#include <locale.h>
#include <ctype.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	int placa, resto;
	printf ("Digite a placa: ");
	scanf ("%i",&placa);
	
	resto=placa%10;
	printf ("Rodízio: ");
	switch (toupper(resto))
	{
		case 1: case 2: printf ("segunda \n"); break;
		case 3: case 4: printf ("terça \n"); break;
		case 5: case 6: printf ("quarta \n"); break;
		case 7: case 8: printf ("quinta \n"); break;
		case 9: case 0: printf ("sexta \n"); break;
	}
}
