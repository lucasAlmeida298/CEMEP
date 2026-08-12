"""Faça um programa que receba a idade, o peso e o sexo (F/M)
de um grupo de pessoas. Calcule e exiba:
a) total de homens
b) total de mulheres
c) média das idades dos homens
d) média das idades das mulheres
Inserir no programa uma mensagem para o usuário perguntando se
deseja continuar ou finalizar o programa"""

print("-"*80)
print("Exemplo 4".center(80))
print("-"*80)

cont = "n"
M=0
F=0
iM=0
iF=0

while cont!="N":
    idade=int(input("Digite sua idade: "))
    peso=float(input("Digite seu peso (em KG): "))
    sexo=input("Digite seu sexo [F/M]: ".upper())
    if(sexo=="M"):
        M=M+1
        iM=iM+idade
    else:
        F=F+1
        iF=iF+idade
    cont=input("Deseja continuar? [S/N]: ".upper())

print("O total de homens é: ",M)
print("O total de mulheres é: ",F)
print("A média das idades dos homens é: ",iM/M)
print("A média das idades das mulheres é: ",iF/F)
    
