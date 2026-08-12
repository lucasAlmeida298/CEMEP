"""Faça um programa que receba uma quantidade indefinida
de números. No final exiba:
- quantidade de número pares digitados
- qunatidade de números ímpares digitados
Para finalizar o programa utilize zero para o número"""

print("-"*50)
print("Cadastro dos Números".center(50))
print("Para finalizar o programa digite zero".center(50))
print("-"*50)

cont=1
par=0
impar=0

while cont!=0:
    cont=int(input("Digite um número: "))
    if (cont%2==0):
        par=par+1
    else:
        impar=impar+1

print("Quantidade de números pares: ",par)
print("Quantidade de números impares: ",impar)
