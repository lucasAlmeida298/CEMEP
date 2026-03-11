programa
{
	
	funcao inicio()
	{
		cadeia nome
		real nota1, nota2, media, rec, med_rec
		escreva ("Digite seu nome: ")
		leia (nome)
		escreva ("Digite sua primeira nota: ")
		leia (nota1)
		escreva ("Digite sua segunda nota: ")
		leia (nota2)

		media=(nota1+nota2)/2

		escreva ("\nNome:", nome)

		se (media>=7) {
		escreva ("\nSua média é: ", media)
		escreva ("\nAluno aprovado")
		} senao se (media<=4) {
		escreva ("\nSua média é: ", media)
		escreva ("\nAluno reprovado")	
		} senao {
		escreva ("\nRecuperação")
		escreva ("\nDigite sua nota da recuperação: ")
		leia (rec)

		med_rec=(media+rec)/2

		se (med_rec>=7) {
		escreva ("\nSua média após recuperação é: ", med_rec)
		escreva ("\nAluno aprovado após recuperação")
		} senao {
		escreva ("\nSua média após a recuperção é: ", med_rec)
		escreva ("\nAluno reprovado após recuperação")
            }
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 290; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */