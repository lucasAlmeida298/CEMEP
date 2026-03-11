#include <stdio.h>
main ()
{
	int A, B, R, i=1;
do
{
		printf("\n Digite um valor para A: ");
		scanf("%i", &A);
		printf("\n Digite um valor para B: ");
		scanf("%i", &B);
		R=A+B;
		printf("\n O resultado corresponde a: %i", R);
		i++;
}
	while (i<=5);
}

