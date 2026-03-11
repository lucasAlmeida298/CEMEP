programa
{
    inclua biblioteca Util --> u

    funcao inicio()
    {
        inteiro cont = 0
        cadeia nome, aprovados = "",reprovados = ""
        real n1, n2, m, acum_media = 0.0, media_sala

        escreva("*** Programa Média ***\n")

        enquanto (cont < 3)
        {
            cont = cont + 1
            escreva("\nDigite o nome do ", cont, "º aluno: ")
            leia(nome)

            escreva("Digite a primeira nota: ")
            leia(n1)
            escreva("Digite a segunda nota: ")
            leia(n2)

            m = (n1 + n2) / 2
            acum_media = acum_media + m

            se (m >= 6 e m <= 10) {
                escreva("\nO aluno ", nome, " obteve média ", m, " e foi aprovado(a).\n")
                aprovados = aprovados + nome + " "
            }
            senao se (m < 6 e m >= 0) {
                escreva("\nO aluno ", nome, " obteve média ", m, " e foi reprovado(a).\n")
                reprovados = reprovados + nome + " "
            }
            senao {
                escreva("\nDados inválidos para o aluno ", nome, ".\n")
            }
        }

        media_sala = acum_media / 3

        escreva("\nA média da sala é: ", media_sala, "\n")
        escreva("\nAlunos aprovados: ", aprovados, "\n")
        escreva("Alunos reprovados: ", reprovados, "\n")

        u.aguarde(100000)
        limpa()
    }
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 773; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */