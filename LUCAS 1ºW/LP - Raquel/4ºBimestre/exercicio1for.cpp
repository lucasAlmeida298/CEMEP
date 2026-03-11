//programa desenvolvido por Lucas Almeida 1ºW
/*Desenvolva um programa que receba a idade de 10 pessoas, calcule e exiba a quantidade de pessoas
maiores de idade (idade &gt;= 18 anos). */
#include <stdio.h>
#include <locale.h>

main ()
{
	setlocale (LC_ALL, "Portuguese");
	int i, idade, cont_maioridade=0;
	for (i=1;i<=10;i++)
	{
		printf ("Pessoa %i digite sua idade: ", i);
		scanf ("%i", &idade);
		if (idade>=18) {
		cont_maioridade++;
		} else {
			cont_maioridade=cont_maioridade;
		}
	}
	
	
	printf ("O número de pessoas maior de idade é: %i", cont_maioridade);
}

