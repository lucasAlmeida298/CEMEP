"""Desenvolva um programa para simular a venda de ingressos de um
cinema. O valor do ingresso pode variar de acordo com idade da pessoa,
se ela é estudante e o dia da semana.
O programa deve solicitar ao usuário as seguintes informações:
 Idade da pessoa
 Se a pessoa é estudante (responder com S para sim ou N para não)
 Dia da semana (1 - Segunda, 2 - Terça, 3 - Quarta, 4 - Quinta, 5 -
Sexta, 6 - Sábado e 7 - Domingo)
O preço normal do ingresso (inteira) é:
 R$ 30,00
O programa deve verificar as seguintes condições:
 Estudantes pagam meia-entrada, ou seja, 50% de desconto.
 Pessoas com 60 anos ou mais também pagam meia-entrada.
 Às quartas-feiras todos os clientes pagam meia-entrada,
independentemente da idade ou de serem estudantes.
Ou seja:
 Inteira → R$ 30,00
 Meia → R$ 15,00
Se mais de uma condição de meia-entrada ocorrer, o desconto não se
acumula. O cliente pagará apenas uma meia-entrada.
O programa deve mostrar ao final:
 idade do cliente
 se é estudante ou não
 dia da semana informado
 tipo de ingresso (inteira ou meia)
 valor final a pagar"""

#cabeçalho
print("-"*80)
print("Exercício 2".center(80))
print("-"*80)

#entrada de dados
ingresso = 30
idade = int(input("Digite sua idade: "))
estudante = input("Você é estudante? (S-sim/N-não): ")
if estudante=='s' or estudante=='S':
    verEstudante=1
else:
    verEstudante=0
    """qualquer letra diferente de S ou s não conta como estudante"""
print ("1-Segunda, 2-Terça, 3-Quarta, 4-Quinta, 5-Sexta, 6-Sábado e 7-Domingo")
diaSemana = int(input("Digite o dia da semana: "))

#verificação
if verEstudante==1 or idade>=60 or diaSemana==3:
    ingresso=ingresso/2
else:
    ingresso=ingresso

#saída
print("Sua idade é: ", idade)
if verEstudante==1:
    print("Você é estudante")
else:
    print("Você não é estudante")
match diaSemana:#Pesquisei como funcionava o "switch case" no python
    case 1:
        print("O dia da semana informado é segunda")
    case 2:
        print("O dia da semana informado é terça")
    case 3:
        print("O dia da semana informado é quarta")
    case 4:
        print("O dia da semana informado é quinta")
    case 5:
        print("O dia da semana informado é sexta")
    case 6:
        print("O dia da semana informado é sábado")
    case 7:
        print("O dia da semana informado é domingo")
    case _:
        print("O dia da semana informado não existe")
if ingresso==30:
    print("O tipo de ingresso é inteira")
else:
    print("O tipo de ingresso é meia")
print("O valor final a pagar é: R$ ", ingresso)

#rodapé
print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
