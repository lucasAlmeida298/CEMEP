programa
{
	funcao inicio ()
	{
	inteiro A
	escreva ("1 para norte, 2 sul, 3 leste, 4 oeste, 5 nordeste, 6 sudeste, e 7 centro oeste")
	escreva ("\nDigite o número referente a região: ")
	leia (A)
	se (A==1) {
	escreva ("Os estados do norte são: Acre, Amapá, Amazonas, Pará, Rondônia, Roraima e Tocantins")
     }senao se (A==2) {
	escreva ("Os estados do sul são: Rio Grande do Sul, Santa Catarina e Paraná")
     }senao se (A==3) {
	escreva ("Os estados do leste são: Espírito Santo, Rio de Janeiro, Minas Gerais e São Paulo")
     }senao se(A==4) {
	escreva ("Não há oeste no Brasil")
     }senao se(A==5) {
	escreva ("Os estados do nordeste são: Maranhão, Piauí, Ceará, Rio Grande do Norte, Paraíba, Pernambuco, Alagoas, Sergipe e Bahia")
     }senao se (A==6) {
	escreva ("Os estados do sudeste são: Espírito Santo, Minas Gerais, Rio de Janeiro e São Paulo")
	}senao se (A==7) {
	escreva ("Os estados do centro oeste são: Goiás, Mato Grosso, Mato Grosso do Sul e pelo Distrito Federal")
	} senao {
	escreva ("Código inválido")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 1001; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */