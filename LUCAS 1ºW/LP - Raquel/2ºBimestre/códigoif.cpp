// Programa desenvolvido por Lucas Almeida - 1ºW
/*Programa que lê um valor numérico inteiro refernte aos código 1, 2 e 3. Qualquer outro valor
deve aoresentar a mensagem "Código inválido". Se o valor estiver correto, apresenta o valor
no código escrito por extenso */

#include <stdio.h>
#include <locale.h>

int main ()
{
	setlocale (LC_ALL, "Portuguese");
	int A;
	printf ("\nEntre com o código de acesso: ");
	scanf ("%i", &A);
	
	if (A == 1 || A == 2 || A == 3 )
	{
		if (A==1)
			printf ("Um\n");
		if (A == 2)
			printf ("Dois\n");
		if (A==3)
			printf ("Três\n");
	} 
	else 
			printf ("Código inválido\n");
	
	return 0;
}
