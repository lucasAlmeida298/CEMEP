"""Faça um programa para cadastrar o nome dos clientes de
uma loja, inserir no programa uma mensagem para o usuário
perguntando se deseja continuar ou finalizar o programa"""

print("-"*50)
print("Cadastro de Cliente".center(50))
print("-"*50)
resp = input("Deseja iniciar o cadastro [S/N]: ").upper()
while resp == "S":
    nome=input("Nome do cliente: ")
    resp=input("Deseja casdastrar outro? [S/N]: ").upper()

print("Fim do programa")
