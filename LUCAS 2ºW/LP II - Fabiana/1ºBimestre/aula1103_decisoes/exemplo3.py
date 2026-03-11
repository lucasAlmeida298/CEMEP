#Exemplo de programa utilizando estrutura de decisão composta encadeada onde termos MAIS DE DUAS respostas
"""Faça um programa que receba a média de um aluno e verifique se ele foi aprovado, recuperação, reprovado
ou foi digitado uma média inválida
aprovado média>=6 e <=10
recuperação média>=4 e <6
reprovado média>=0 e <4
diferente disso é média inválida"""
#entrada
media = float(input("Informe a média do aluno: "))
#processamento
if (media>=6 and media<=10):
    print ("Aluno aprovado")
elif (media>=4 and media<6):
    print ("Aluno de recuperação")
elif (media>=0 and media<4):
    print ("Aluno reprovado")
else:
    print ("Média inválida")
#esta mensagem já está fora da estrutura
print ("Fim do programa")
