//calcular a média das notas de LPI de 5 alunos utilizando while
#include <stdio.h>
#include <locale.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	int i=1;
	float nota, acum_nota=0, media;
	while (i<=5)
	{
		printf ("Digite nota do aluno: ");
		scanf ("%f", &nota);
		acum_nota=acum_nota+nota;
	i=i+1;
	}
	media=acum_nota/5;
	printf ("A média de de p1 dos alunos é %.2f", media);
}
