//programa desenvolvido por Lucas Almeida 1ºW
/*Escreva um programa que receba a idade de 6 pessoas, calcule e exiba:
a) A quantidade de pessoas em cada faixa etária;
b) A porcentagem de cada faixa etária em relação ao total de pessoas.*/
#include <stdio.h>
#include <locale.h>

main ()
{
	setlocale (LC_ALL, "Portuguese");
	int i, idade, cont_1a15=0, cont_16a30=0, cont_31a45=0, cont_46a60=0, cont_maiorque61=0, total_pessoas;
	float percent_1a15=0, percent_16a30=0, percent_31a45=0, percent_46a60=0, percent_maiorque61=0;
	for (i=1;i<=6;i++)
	{
		printf ("Pessoa %i digite sua idade: ", i);
		scanf ("%i", &idade);
		switch (idade>=1 && idade<=15) // quis me desafiar usando switch-case ao invés do if
		{
			case 1:
				cont_1a15++;
			break;
			case 0:
				
			break;
		}
		switch (idade>=16 && idade<=30)
		{
			case 1:
				cont_16a30++;
			break;
			case 0:
				
			break;
		}
		switch (idade>=31 && idade<=45)
		{
			case 1:
				cont_31a45++;
			break;
			case 2:
				
			break;
		}
		switch (idade>=46 && idade<=60)
		{
			case 1:
				cont_46a60++;
			break;
			case 0:
				
			break;
		}
		switch (idade>=61)
		{
			case 1:
				cont_maiorque61++;
			break;
			case 0:
				
			break;
		}
	}
	
	printf ("\nA quantidade de pessoas entre 1 e 15 anos é: %i\n", cont_1a15);
	printf ("A quantidade de pessoas entre 16 e 30 anos é: %i\n", cont_16a30);
	printf ("A quantidade de pessoas entre 31 e 45 anos é: %i\n", cont_31a45);
	printf ("A quantidade de pessoas entre 46 e 60 anos é: %i\n", cont_46a60);
	printf ("A quantidade de pessoas com 61 anos ou mais é: %i\n", cont_maiorque61);
	
	total_pessoas=6;
	
	percent_1a15=(cont_1a15*100)/total_pessoas;
	percent_16a30=(cont_16a30*100)/total_pessoas;
	percent_31a45=(cont_31a45*100)/total_pessoas;
	percent_46a60=(cont_46a60*100)/total_pessoas;
	percent_maiorque61=(cont_maiorque61*100)/total_pessoas;
	
	printf ("\nA porcentagem de pessoas entre 1 e 15 anos é: %.0f%%\n", percent_1a15);
	printf ("A porcentagem de pessoas entre 16 e 30 anos é: %.0f%%\n", percent_16a30);
	printf ("A porcentagem de pessoas entre 31 e 45 anos é: %.0f%%\n", percent_31a45);
	printf ("A porcentagem de pessoas entre 46 e 60 anos é: %.0f%%\n", percent_46a60);
	printf ("A porcentagem de pessoas com 61 anos ou mais é: %.0f%%\n", percent_maiorque61);
}
