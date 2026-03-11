// Programa desenvolvido por Lucas Almeida e Mateus Chaim - 1ºW
/* Leia o código, o nome e o valor de um produto. Apresente todos
os dados lidos em uma linha com o valor acrescido de 100,00.
(SALVAR COMO PRODUTO) */
#include <stdio.h>
#include <locale.h>
#include <math.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	float cdg, vl, rs;
	char nm [20];
	printf ("Digite o código do produto: ");
	scanf ("%f", &cdg);
	printf ("Digite o nome do produto: ");
	scanf ("%s", &nm);
	printf ("Digite o valor do produto: ");
	scanf ("%f", &vl);
	
	rs=vl+100;
	printf ("\n O código do seu produto é: %.0f", cdg);
	printf ("\n O nome do seu produto é: %s", nm);
	printf ("\n O valor final do seu produto é: %.2f", rs);
}
