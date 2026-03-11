// Programa desenvolvido Lucas Almeida - 1ºW
/* Qual é a média de um aluno se a primeira nota tem peso 2, a segunda nota tem peso 3
e a terceira nota tem peso 5? Dica: multiplica nota pelo peso e no final divida
por 10. (Salvar como MEDIA). */ 

#include <stdio.h>
#include <locale.h>
#include <math.h>
main()
{
	setlocale(LC_ALL,"Portuguese");
	float n1, n2, n3, md;
	printf("Digite a primeira nota:");
	scanf("%f", &n1);
	printf("Digite a segunda nota:");
	scanf("%f", &n2);
	printf("Digite a terceira nota:");
	scanf("%f", &n3);
	
	md=((n1*2)+(n2*3)+(n3*5))/10;
	
	printf("A sua nota final é: %2.f", md);
}

