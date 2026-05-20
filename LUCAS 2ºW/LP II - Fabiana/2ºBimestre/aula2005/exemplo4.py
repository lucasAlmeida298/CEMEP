#exemplo utilizando find
"""Faça um programa que receba uma frase e verifique se existe a
plavra Python nela"""

frase = input("Digite uma frase: ").title()
posicao = frase.find("Python")

if posicao == -1:
    print("A palavra Python não foi encontrada na frase")
else:
    print("A palavra Python foi encontrada e começa na posção ", posicao)

#exemplo utilizando rfind
ultimaPosicao = frase.rfind("Python")
if ultimaPosicao == -1:
    print("A palavra Python não foi encontrada na frase")
else:
    print("A palavra Python foi encontrada e começa na posção ", ultimaPosicao)
