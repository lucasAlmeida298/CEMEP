programa
{
    inclua biblioteca Util --> u
    inclua biblioteca Matematica --> m
    
    funcao inicio()
    {
        inteiro cont=0, id, acum_90kg=0
        real ps, acum_idade=0.0, media_idade

        escreva ("*** Programa Peso ***")
        
        enquanto (cont < 7)
        {
            cont=cont+1
            escreva("\nDigite a idade da ", cont, "ª pessoa: ")
            leia(id)
            escreva ("Digite o peso: ")
            leia(ps)

            acum_idade = acum_idade + id

            se (ps > 90) {
                acum_90kg = acum_90kg + 1
            }
        }

        media_idade = acum_idade / 7

        escreva("\nA média das idades é: ", m.arredondar(media_idade, 0), "\n")
        escreva("Quantidade de pessoas com mais de 90 quilos: ", acum_90kg, "\n")
        
        u.aguarde(5500)
        limpa()
    }
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 827; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */