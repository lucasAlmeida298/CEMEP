// Programa desenvolvido por Lucas Almeida 1ºW
/* Escreva um programa que receba um conjunto de valores inteiros e positivos, calcule e
exiba o maior e o menor valor do conjunto.*/
#include <stdio.h>
#include <locale.h>

main ()
{
	setlocale (LC_ALL, "Portuguese");
	int i, num, maior=0, menor=99999999;
	printf ("Crie seu conjunto de 10 números");
	for (i=1;i<=10;i++)
	{
		printf ("\nDigite o %iº número do seu conjunto: ", i);
		scanf ("%i", &num);
		
		switch (num>maior) // Quis me desafiar usando switch-case ao invés do if
		{
			case 1:
				maior=num;
			break;
			case 0:
				
			break;
		}
		switch (num<menor)
		{
			case 1:
				menor=num;
			break;
			case 0:
				
			break;
		}
	}
	
	printf ("\nO maior número do seu conjunto é: %i", maior);
	printf ("\nO menor número do seu conjunto é: %i", menor);
}
