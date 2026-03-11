//ler 3 números e apresentar o maior deles 
#include <stdio.h>
#include <locale.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	int maior=0, num, i=1;
	while (i<=3)
	{
		printf ("Digite número: ");
		scanf ("%i",&num);
		if (num>maior)
			maior=num;
		i=i+1;
	}
	printf ("O maior número é %i", maior);
}
