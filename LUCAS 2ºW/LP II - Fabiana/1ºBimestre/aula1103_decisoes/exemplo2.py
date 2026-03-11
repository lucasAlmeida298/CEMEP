#Exemplo de programa utilizando estrutura de decisão composta (se... senão) onde teremos DUAS respostas
"""Nesta estrutura, um trecho do código será executado se a condição for verdaeira e outro será
se a condição for falsa"""
"""Faça um programa que receba a média de um aluno e verifique se ele foi APROVADO ou REPROVADO.
(aprovado media >=6 e media<=10)"""
#entrada
media = float(input("Informe a média do aluno: "))#entrada da média
#processamento (decisões)
if (media >=6 and media<=10):
    print("Aluno aprovado")
else:
    print ("Aluno reprovado")

print ("Fim do programa")
