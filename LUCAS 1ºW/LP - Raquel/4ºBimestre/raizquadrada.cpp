// Programa desenvolvido por Lucas Almeida 1ºW
// Dado um númeiro Real não negativo, informe sua raiz

#include <stdio.h>
#include <locale.h>
#include <math.h>

main ()
{
	setlocale (LC_ALL, "Portuguese");
	float N, RZ;
	int i=1;
	
	printf ("Programa das raízes");
	
	do
	{
		printf ("\nDigite um número real não negativo: ");
		scanf ("%f", &N);
		
		RZ=sqrt(N);
		
		printf ("\nA raiz quadrada do seu número é: %.1f", RZ);
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
	}
	
	while (i<2);
}
