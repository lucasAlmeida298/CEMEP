// Programa desenvolvido por Lucas Almeida - 1ºAno W
/* Leia o valor de uma compra e o desconto aplicado
na mesma. Exiba o novo valo da compra. */
#include <stdio.h>
#include <locale.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	float vl, ds, vf, dc;
	printf ("Digite o Valor da compra: ");
	scanf ("%f", &vl);
	printf ("Digite o percentual de desconto: ");
	scanf ("%f", &ds);
	
	dc=(ds/100)*vl;
	vf=vl-dc;
	printf ("O valor final do produto é: %.0f", vf);
}
