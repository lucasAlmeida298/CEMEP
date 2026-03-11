// Programa desenvolvido por Lucas Almeida - 1ºW
// Dado um número real qualquer, informe seu dobro
#include <stdio.h>
#include <locale.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	float nm, dn;
	printf ("Digite um número: ");
	scanf ("%f", &nm);
	
	dn=nm*2;
	printf ("O dobro do seu número é: %.2f", dn);
}
