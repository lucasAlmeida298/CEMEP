"""Função input: usada para receber dados do usuário pelo teclado
ou seja, enquanto o print () mostra algo na tela, o input () espera o
usuário digitar alguma coisa"""

"""Faça um programa que receba o nome, idade e peso de uma pessoa pelo
teclado e exiba uma mensagem conforme o exemplo:
Lucas tem 25 anos e pesa 70.5 quilos"""
#entrada
nome = input("Digite seu nome: ")
idade = input("Digite sua idade: ")
peso = input("Digite seu peso: ")

#verificando o tipo das variáveus utilizadas
print (type(nome))
print (type(idade))
print (type(peso))

"""O comando input(), sempre vai retornar uma string. Nesse caso,
para retornar dados do tipo inteiro ou float, é preciso converter
o tipo do valor lido"""

nome = input("Digite seu nome: ")

#transformando valor em número inteiro
idade = int(input("Digite sua idade: "))
peso = float(input("Digite seu peso: "))

#verificando o tipo das variáveis utilizadas

print (type(nome))
print (type(idade))
print (type(peso))

#processamento/saída
#exibindo apenas as variáveis

print (nome, "tem", idade, "anos e pesa", peso, "quilos")
