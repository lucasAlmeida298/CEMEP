// Programa desenvolvido por Lucas Almeida - 1ºW
/* Em uma universidade, a aprovação requer no máximo 40 faltas e no mínimo média 6,0. Se o aluno
estourar em faltas, ele é reprovado diretamente; caso contrário, se ele não alcançar a média mínima, ele fica
de recuperação. Dada a média de um aluno, bem como seu número de faltas. Informe a sua situação */

#include <stdio.h>
#include <locale.h>

int main ()
{
	setlocale (LC_ALL, "Portuguese");
	float A,B,C,D, MD, N;
	int F;
	printf ("Digite seu número de faltas: ");
	scanf ("%i", &F);
	
	printf ("\nDigite sua primera nota: ");
	scanf ("%f", &A);
	printf ("\nDigite sua segunda nota: ");
	scanf ("%f", &B);
	printf ("\nDigite sua terceira nota: ");
	scanf ("%f", &C);
	printf ("\nDigite sua quarta nota: ");
	scanf ("%f", &D);
	
	N=A+B+C+D;
	MD=N/4;
	
	printf ("\nSua média é: %.0f", MD);
	
	if (F <= 40)
		if (MD >= 6)
			printf ("\nAprovado");
		else 
			printf ("\nReprovado");
	else 
			printf ("\nReprovado");
			
	return 0;
}
