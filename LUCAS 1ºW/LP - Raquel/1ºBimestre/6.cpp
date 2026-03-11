// Programa desenvolvido por Lucas Almeida - 1ºAno W
/*O índice de massa corpórea (IMC) de uma pessoa é igual ao
seu peso dividido pelo quadrado de sua altura. Dados o peso e
a altura de uma pessoa, informe o valor de seu IMC.*/
#include <stdio.h>
#include <locale.h>
#include <math.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	float ps, al, im;
	printf ("Digite sua altura: ");
	scanf ("%f", &al);
	printf ("Digite seu peso: ");
	scanf ("%f", &ps);
	
	im=ps/pow(al,2);
	printf ("O seu IMC é: %.0f", im);
}
