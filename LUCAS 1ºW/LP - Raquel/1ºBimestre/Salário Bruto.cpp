//Programa desenvolvido por Lucas
/* Desenvolver um programa que calcule o salário líquido 
de um profissional que trabalhe por hora. Para fazer esse
programa é preciso lançar os dados: Valor da hora do trabalho,
múmero de horas trabalhadas no mês e o percentual de desconta 
do INSS. O programa deve apresentar o valor do salário bruto,
o valor descontado e o valor do salário líquido. */

#include <stdio.h>
#include <locale.h>
main()
{
	setlocale (LC_ALL,"Portuguese");
	float ht, vh, pd, td, sb, sl;
	printf ("digite o valor da hora do trabalho:");
	scanf ("%f",&ht);
	printf ("Digite o número de horas trabalhadas no mês:");
	scanf ("%f",&vh);
	printf ("Digite o percentual de desconto do INSS:");
	scanf ("%f",&pd);
	sb=ht*vh;
	td=(pd/100)*sb;
	sl=sb-td;
	printf ("O valor do salário bruto é: %.0f",sb);
	printf ("O valor descontado é: %.0f",td);
	printf ("O valor do salário líquido é: %.0f",sl);
}
