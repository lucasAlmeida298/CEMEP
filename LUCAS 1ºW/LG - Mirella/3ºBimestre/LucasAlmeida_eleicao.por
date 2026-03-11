programa
{
	inclua biblioteca Util --> u
	inclua biblioteca Matematica --> m
	
	funcao inicio()
	{
		inteiro voto_a=0, voto_b=0, voto_branco=0, voto_nulo=0, voto, i=2, por_a, por_b, por_branco, por_nulo
		real voto_total=0

		escreva ("*****Programa Eleição*****")

		enquanto (i!=0) {
		escreva ("\n1-Candidato A 2-Candidato B 3-Voto Branco")
		escreva ("\nDigite o número correspondente ao seu voto: ")
		leia (voto)

		escolha (voto) {
			
			caso 1:
				voto_a=voto_a+1
				voto_total=voto_total+1
			pare

			caso 2:
				voto_b=voto_b+1
				voto_total=voto_total+1
			pare

			caso 3:
				voto_branco=voto_branco+1
				voto_total=voto_total+1
			pare

			caso contrario:
				voto_nulo=voto_nulo+1
				voto_total=voto_total+1
		}
		
		escreva ("\nDigite 0 se deseja encerrar o programa, qualquer outro continuará: ")
		leia (i)

		escolha (i) {
			caso 0:
				i=0
			pare

			caso contrario:
				i=1
			pare
		}
	   }

	   se (voto_total!=0) {
	   	por_a=(voto_a*100)/voto_total
	   	por_b=(voto_b*100)/voto_total
	   	por_branco=(voto_branco*100)/voto_total
	   	por_nulo=(voto_nulo*100)/voto_total

	   	escreva ("\nO total de votos foi: ", voto_total)
	   	
	   	escreva ("\nO total de votos no candidato A foi: ", voto_a)
	   	escreva ("\nO percentual de votos no candidato A foi: ", por_a ,"%")

	   	escreva ("\nO total de votos no candidato B foi: ", voto_b)
	   	escreva ("\nO percentual de votos no candidato B foi: ", por_b ,"%")

	   	escreva ("\nO total de votos branco foi: ", voto_branco)
	   	escreva ("\nO percentual de votos branco foi: ", por_branco ,"%")

	   	escreva ("\nO total de votos nulo foi: ", voto_nulo)
	   	escreva ("\nO percentual de votos nulo foi: ", por_nulo ,"%")

	   	escreva ("\nO programa foi encerrado")
	   }

	   senao {
	   	escreva ("\nO programa foi encerrado")
	   	
	   	
	   }
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 1105; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */