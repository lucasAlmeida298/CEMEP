programa
{
	
	funcao inicio()
	{
		inteiro A
		escreva ("Programa estação e meses")
		escreva ("\n1 Janeiro, 2 fevereiro 3 março, 4 abril, 5 maio, 6 junho,")
		escreva ("\n7 julho, 8 agosto, 9 setembro 10 outubro,")
		escreva (" 11 novembro, 12 dezembro")
		escreva ("\nDigite o número referente a cada mês para mais informações: ")
		leia (A)

		se (A >= 1 e A <= 3) {
		escreva ("\nA estação correspondente ao mês selecionado é verão")
		}
		senao se (A >= 4 e A <= 6) {
		escreva ("\nA estação correspondente ao mês selecionado é outono")
		}
		senao se (A >= 7 e A <= 9) {
		escreva ("\nA estação correspondente ao mês selecionado é inverno")
		}
		senao se (A >= 10 e A <= 12) {
		escreva ("\nA estação correspondente ao mês selecionado é primavera")
		}
		senao {
		escreva ("Dado inválido")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 768; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */