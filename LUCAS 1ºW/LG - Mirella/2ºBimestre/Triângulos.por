programa
{
	
	funcao inicio()
	{
		inteiro lado1, lado2, lado3
		escreva ("Digite o comprimento do lado 1: ")
		leia (lado1)
		escreva ("Digite o comprimento do lado 2: ")
		leia (lado2)
		escreva ("Digite o comprimento do lado 3: ")
		leia (lado3)

		se (lado1 >= lado2 + lado3 ou lado2 >= lado1 + lado3 ou lado3 >= lado1 + lado2) {
		escreva ("\nNenhum triângulo foi formado.")
		} senao {
			se (lado1==lado2 e lado2==lado3) {
			escreva ("\nOs valores formaram um triângulo válido.")
			escreva ("\nTriângulo Equilátero")
			} senao se (lado1 == lado2 ou lado1 == lado3 ou lado2 == lado3) {
			escreva ("\nOs valores formaram um triângulo válido.")
			escreva ("\nTriângulo Isósceles")
			} senao se (lado1*lado1 == lado2*lado2 + lado3*lado3 ou lado2*lado2 == lado1*lado1 + lado3*lado3 ou lado3*lado3 == lado1*lado1 + lado2*lado2) {
			escreva ("\nOs valores formaram um triângulo válido.")
			escreva ("\nTriângulo Retângulo")
			} senao {
			escreva ("\nOs valores formaram um triângulo válido.")
			escreva ("\nTriângulo Escaleno")
		    }
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 353; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */