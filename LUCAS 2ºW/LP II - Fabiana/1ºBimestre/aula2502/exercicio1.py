"""Faça um programa que leia o nome, o dia, o mês (por extenso)
e o ano de nascimento de uma pessoa (separado) e exiba a seguinte
informação.
Ex.:Fulano, nasceu no dia 25 de fevereiro de 2026
Inserir um cabeçalho e um rodapé"""

#cabeçalho
print ("="*80)
print ("Exercício 1 - LP - 25/02/2026".center(80))
print ("="*80)

#entrada
nome=input("Digite seu nome: ")
dia=int(input("Digite o dia que você nasceu: "))
mes=input("Digite o mês que você nasceu: ")
ano=int(input("Digite o ano que você nasceu: "))

#processamento/saída

print (nome, "nasceu no dia", dia, "de", mes, "de", ano)

#rodapé
print ("="*80)
print ("Desenvolvido por Lucas".center(80))
print ("="*80)

