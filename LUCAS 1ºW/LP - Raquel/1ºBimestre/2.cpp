// Programa desenvolvido por Lucas Almeida - 1ºW
/* Digite 4 notas de um aluno. Calcule a média.
Exiba a média calculada. */
#include <stdio.h>
#include <locale.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	float n1, n2, n3, n4, md;
	printf ("Digite sua primeira nota: ");
	scanf ("%f", &n1);
	printf ("Digite sua segunda nota: ");
	scanf  ("%f", &n2);
	printf ("Digite sua terceira nota: ");
	scanf ("%f", &n3);
	printf ("Digite sua quarta nota: ");
	scanf ("%f", &n4);
	
	md = (n1+n2+n3+n4)/4;
	printf ("\n A média de suas notas é: %.2f", md);}
	
