// Programa desenvolvido por Lucas Almeida e Mateus Chaim - 1ºW
/* Forneça o resultado de x=(a^2+b^2)/2 (SALVAR COMO RESULTADO)*/
#include <stdio.h>
#include <locale.h>
#include <math.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	float a, b, x;
	printf ("Digite seu primeiro número: ");
	scanf ("%f", &a);
	printf ("Digite seu segundo número: ");
	scanf ("%f", &b);
	
	x=(pow(a,2)+pow(b,2))/2;
	printf ("O resultado da sua conta é: %.1f", x);
}
