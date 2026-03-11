//ler 3 números e apresentar o menor deles 
#include <stdio.h>
#include <locale.h>
main()
{
	setlocale (LC_ALL, "Portuguese");
	int menor=9999999, num, i=1;
	while (i<=3)
	{
		printf ("Digite número: ");
		scanf ("%i",&num);
		if (num<menor)
			menor=num;
		i=i+1;
	}
	printf ("O menor número é %i", menor);
}
