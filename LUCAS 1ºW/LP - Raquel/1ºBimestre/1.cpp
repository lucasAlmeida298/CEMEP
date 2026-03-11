//programa desenvolvido por Lucas Almeida - 1ºAno W
/*Ler o nome e o salário de um funcionário. Aplique
um aumento de 100,00 no salário reajustado. Exiba 
o Nome e o salário atudalizado.*/
#include <stdio.h>
#include <locale.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	char nm[100];
	float sl, sa;
	printf ("digite seu nome: ");
	scanf ("%s", &nm);
	printf ("digite seu salário: ");
	scanf ("%f", &sl);
	
	sa=sl+100;
	printf ("\n Seu nome é: %s", nm);
	printf ("\n Seu salario antigo era %f", sl);
	printf ("\n Seu novo slario é %2f", sa);
}
	
	
