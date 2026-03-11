//Programa desenvolvido por Lucas Almeida 1W
/* Dadas as duas notas de um aluno, informe a sua média.
Seu programa deve forçar o usuário a digitar notas na faixa de 0 a 10.*/

#include <stdio.h>
#include <locale.h>

main ()
{
	setlocale (LC_ALL, "Portuguese");
	float N1, N2, MD;
	int i=1;
	
	printf ("Programa das médias");
	
	do
	{
		do
		{
			printf ("\nDigite sua primeira nota: ");
			scanf ("%f", &N1);
		} while (N1>10 || N1<0);
	
		do
		{
			printf ("\nDigite sua segunda nota: ");
			scanf ("%f", &N2);
		} while (N2>10 || N2<0);
	
	MD=(N1+N2)/2;
	
	printf ("\nA Média das suas notas é: %.1f", MD);
	printf ("\n1-Sim 2-Não \nDeseja continuar?: ");
	scanf ("%i", &i);
	
	switch (i)
	{
		case 1:
			
		break;
		
		case 2:
			i++;
		break;
	}
	} while (i<2);
	
	
}
