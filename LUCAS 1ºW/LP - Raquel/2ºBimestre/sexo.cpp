//Programa informa o sexo porextenso com switch case
#include <stdio.h>
#include <locale.h>
#include <ctype.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	char sexo;
	printf ("Digite sexo: ");
	scanf ("%c", &sexo);
	switch (toupper(sexo))
	{
		case 'M': printf("Masculino \n");break;
		case 'F': printf("Feminino \n");break;
		default: printf("Inválido \n");break;
	}
}
