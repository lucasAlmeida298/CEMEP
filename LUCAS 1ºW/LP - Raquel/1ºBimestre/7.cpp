// Programa desenvolvido por Lucas Almeida - 1ºAno W
/* Leia o nome, a idade e o email de um aluno. Exiba “O
aluno.......tem........anos e seu email é................”.*/
#include <stdio.h>
#include <locale.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	char nm [100];
	char em [100];
	float id;
	printf ("Digite seu nome: ");
	scanf ("%s", &nm);
	printf ("Digite sua idade: ");
	scanf ("%f", &id);
	printf ("Digite seu email: ");
	scanf ("%s", &em);
	
	printf ("\n Seu nome é: %s", nm);
	printf ("\n Sua idade é: %.0f", id);
	printf ("\n Seu email é: %s", em);
}
