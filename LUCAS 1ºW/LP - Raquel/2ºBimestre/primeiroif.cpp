/* Faça um programa que leia dois valores numéricos, 
efetue a soma e apresente o resultado caso o valor somado
seja maior que 10*/ 
#include <stdio.h>
#include <locale.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	int a, b, soma;
	printf ("Escreve valor de a: ");
	scanf ("%i",&a);
	printf ("Escreva o valor de b: ");
	scanf ("%i",&b);
	soma=a+b;
	if (soma > 10)	
	     printf ("O resultado é: %i", soma);
}
