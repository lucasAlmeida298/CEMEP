//Programa desenvolvido por Lucas Almeida - 1ºW
/*e exiba o valor da expressão => x=(a+b)2 +(b+c)2
/2   (Salvar como EXPRESSAO).*/

#include <stdio.h>
#include <locale.h>
#include <math.h>

main()
{
	setlocale (LC_ALL, "Portuguese");
	float vx, va, vb, vc;
	printf ("Digite o valor de x: ");
	scanf ("%f", &vx);
	printf ("Digite o valor de a: ");
	scanf ("%f", &va);
	printf ("Digite o valor de b: ");
	scanf ("%f", &vb);
	printf ("Digite o valor de c: ");
	scanf ("%f", &vc);
	
	vx=(va+vb)*2 + (vb+vc)*2;
	printf ("O valor da sua expressão é: %.1f", vx);
}
