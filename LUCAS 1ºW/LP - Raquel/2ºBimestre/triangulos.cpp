// Programa desevolvido por Lucas Almeida - 1ºW
/* Ler três valores referente às medidas dos lados de um triângulo. Verificar se os lodos fornecidos formam
realmente um triângulo. Se for uma condição verdadeira, deve ser indicado qual tipo de triângulo foi formado:
isóceçes, escaleno ou equilátero. É um triângulo quando A<B+C, quando B<A+C e quando C<A+B */

#include <stdio.h>
#include <locale.h>

int main ()
{
	setlocale (LC_ALL, "Portuguese");
	float A, B, C;
	
	printf ("Digite o valor de A: ");
	scanf ("%f", &A);
	printf ("Digite o valor de B: ");
	scanf ("%f", &B);
	printf ("Digite o valor de C: ");
	scanf ("%f", &C);
	
	if (A<B+C && B<A+C && C<A+B)
	{
			printf ("É um triângulo\n");
			if (A==B && B==C)
				printf ("\nEquilátero");
			else 
				if (A==B || A==C || C==B)
					printf ("\nIsóceles");
				else 
					printf ("\nEscaleno");
				}
	else 
		printf ("Os valores fornecidos não formam um triângulo");
	
	return 0;
	
}
					
