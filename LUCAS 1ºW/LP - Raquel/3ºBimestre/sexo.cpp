// Programa desenvolvido por Lucas Almeida 1ºW
/* Uma empresa decidiu fazer um levantamento em relação aos candidatos que
se apresentarem para preenchimento de vagas no seu quadro de funcionários.
Leia para cada candidato a idade, o sexo (1- Feminino e 2-Masculino) e a
experiência no serviço (1- Sim e 2- Não).*/
#include <stdio.h>
#include <locale.h>
main ()
{
	setlocale (LC_ALL, "Portuguese");
	int idade, sexo, experiencia, quant_masc=0, quant_fem=0, resp=1, acum_idadeh=0, acum_exph=0, acum_idadef=0, acum_expf=0, menor=0, idade_experiencia=0;
	float media_idadeh;
	while (resp>0) {
		printf ("\nDigite sua idade: ");
		scanf ("%i", &idade);
		printf ("\nA qual sexo você pertence? (1-Masculino 2-Feminino): ");
		scanf ("%i", &sexo);
		printf ("\nTem experiência no serviço? (1-Sim 2-Não): ");
		scanf ("%i", &experiencia);
		if (experiencia==1) {
			experiencia=1;
		}
		else {
			experiencia=0;
		}
		
		switch (sexo)
		{
			case 1:
			quant_masc=quant_masc+1;
			acum_exph=acum_exph+experiencia;
				switch (acum_exph)
				{
					case 1:
					acum_idadeh=acum_idadeh+idade;
					idade_experiencia+1
					break;
					default: acum_idadeh=acum_idadeh+0; break;
				}
			case 2:
			quant_fem=quant_fem+1;
			acum_expf=acum_expf+experiencia;
				switch (acum_expf)
				{
					case 1: while (idade<menor) {
						menor=idade;
					}
					break;
					default: idade=idade; //só pra preencher o default
				}
			break;
			default: printf ("Dado inválido");
		}	

		printf ("\nDeseja continuar? (1-Sim 2-Não): ");
		scanf ("%i", &resp);
		
		switch (resp)
		{
			case 1: resp=1; break;
			case 2: resp=0; break;
		}
	}
	
	media_idadeh=acum_idadeh/idade_experiencia;
	
	printf ("\n\nA quantidade de candidatos masculinos é: %i", quant_masc);
	printf ("\nA quantidade de candidatos femininos é: %i", quant_fem);
	printf ("A idade média das pessoas do sexo masculino que já tem experiência no serviço é: %f", media_idadeh);
	printf ("A menor idade entre as pessoas do sexo feminino que tem experiÊncia é: %i", menor);
	
}
