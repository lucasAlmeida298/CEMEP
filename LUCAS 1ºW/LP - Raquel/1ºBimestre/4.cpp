// Programa desenvolvido por Lucas Almeida - 1ºano W
/* Dada as medidas de uma sala em metros (comprimento
e largura), informe a sua área em metros quadrados.*/
#include <stdio.h>
#include <locale.h>
#include <math.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	float cm, lg, mq;
	printf ("Digite o comprimento: ");
	scanf ("%f", &cm);
	printf ("Digite a largura: ");
	scanf ("%f", &lg);
	
	mq=cm*lg;
	printf ("Sua área em metros quadrados é: %.0f", mq);
	
	
}
