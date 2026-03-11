// Programa desenvolvido por Lucas Almeida 1ºW
/* Desenvolver um programa que aceite valores 
inteiros entre zero e nove. Se o valor estiver dentro da faixa,
o programa deve apresemtar a mensagem "valor válido". Caso
o valor esteja fora da faixa, o programa deve apresentar
"valor inválido */

#include <stdio.h>
#include <locale.h>

int main ()
{
	setlocale (LC_ALL, "Portuguese");
	int nm;
	printf ("Digite um número entre 0 e 9: ");
	scanf ("%i", &nm);
	if (nm>=0 && nm<=9) {
		printf ("Valor válido\n");
	} else {
		printf ("Valor inválido\n");
	}
	return 0;
}
