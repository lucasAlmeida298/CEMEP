"""Faça um programa que receba a idade, o peso e o sexo de um
grupo de pessoas. Calcule e exiba
a)Total de mulheres
b)Total de homens
c)média das idades dos homens
d)média das idades das mulheres"""

print("-"*80)
print("Exemplo 4".center(80))
print("-"*80)

resp="S"
acumF=0
acumIdadeF=0
acumIdadeM=0
acumM=0

while resp=="S":
    idade=int(input("Digite sua idade: "))
    peso=float(input("Digite seu peso: "))
    sexo=input("Digite seu sexto (F/M): ").upper()

    if sexo=="F":
        acumF=acumF+1
        acumIdadeF=acumIdadeF+idade
    else:
        acumM=acumM+1
        acumIdadeM=acumIdadeM+idade

    resp=input("Deseja continuar? (S/N): ").upper()
    print("-"*80)

print("-"*80)

print("O total de mulheres é: ", acumF)
print("O total de homens é: ", acumM)
print("A médida das idades dos homens é: ", acumIdadeM/acumM)
print("A média das idades das mulheres é: ", acumIdadeF/acumF)
