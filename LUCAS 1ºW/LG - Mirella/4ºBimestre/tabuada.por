/*Programa desenvolvido por Lucas 1ªW*/
programa
{
	
	funcao inicio()
	{
		escreva("Programa da tabuada")
		inteiro i, num, soma=0

		escreva ("\ndigite um número para ver sua tabuada: ")
		leia (num)
		para (i=1; i<=10; i++)
		{
			soma=i*num
			escreva ("\n",num,"X",i,"=",soma)
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 297; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */