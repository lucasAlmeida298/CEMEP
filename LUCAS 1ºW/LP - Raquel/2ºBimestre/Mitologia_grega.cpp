// Programa desenvolvido por Lucas Almeida e João vitor - 1ºAno W
#include <stdio.h>
#include <locale.h>

main ()
{
	setlocale (LC_ALL, "Portuguese");
	int A, B;
	printf ("1-Arquitetura\n2-Filosofia-\n3-Mitologia");
	printf ("\nDigite o número correspondente ao tema que você deseja conhecer: ");
	scanf ("%i", &A);
	
	if (A==1) {
		printf ("Outro grupo está trabalhando nesse tema!");
	} else if (A==2) {
		printf ("Outro grupo está trabalhando nesse tema!");
	} else if (A==3) {
		printf ("Você escolheu mitologia!\n1-deuses\n2-criaturas mitológicas\n3-heróis");
		printf ("\nDigite o número correspondente a categoria que você deseja se aprofundar: ");
		scanf ("%i", &B);
	if (B==1) {
		printf ("Você escolheu deuses!\nOs deuses gregos são entidades mitológicas que governam");
		printf ("\ndiferentes aspectos da vida e da natureza, como Zeus, \ndeus dos céus, e Poseidon, deus dos mares. Eles eram \nadorados pelos antigos gregos e tinham personalidades \ne histórias fascinantes.");
	} else if (B==2) { 
	    printf ("Você escolheu criaturas!\nAs criaturas mitológicas gregas são seres");
	    printf ("\nfantásticos que habitam lendas e mitos, como o poderoso \nMinotauro, a sedutora Medusa e o feroz Cérbero, refletindo medos, \ndesejos e valores da cultura antiga.");
	} else if (B==3) {
	    printf ("Você escolheu heróis!\nOs heróis mitológicos gregos são figuras lendárias");
	    printf ("\nque enfrentam desafios épicos, como Hércules e suas \ndoze tarefas ou Perseu derrotando a Medusa, representando \ncoragem, astúcia e força na cultura grega.");
	} else {
	        printf ("Dado Inválido!");
	    }
	} else {
	    printf ("Dado Inválido!");
	}
}
