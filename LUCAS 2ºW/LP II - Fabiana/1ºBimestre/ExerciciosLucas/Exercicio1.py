"""Escreva um programa para aprovar o empréstimo bancário para compra de
uma casa. O programa deve perguntar o valor da casa a comprar, o salário
do interessado e a quantidade de anos a pagar. O valor da prestação
mensal não pode ser superior a 30% do salário. Calcule o valor da
prestação: valor da casa a comprar dividido pelo número de meses a
pagar.
Exiba no final:
 O valor da casa
 O salário do interessado
 O valor da prestação
 Mensagem informando se o empréstimo foi autorizado ou não"""

#cabeçalho
print("-"*80)
print("Exercício 1".center(80))
print("-"*80)

#entrada de dados
valorCasa = float(input("informe o valor da casa a comprar: "))
salario = float(input("Digite o valor do salário do interessado: "))
quantAnos = int(input("Digite a quantidade de anos a pagar: "))

#cálculos
percentSalario=salario*0.30
mensal=valorCasa/(quantAnos*12)

#saída
print(f"O valor da casa é de: R$ {valorCasa:.2f}")
print(f"O salário do interessado é: R$ {salario:.2f}")
print(f"O valor da prestação é de: R$ {mensal:.2f}")

if mensal>percentSalario:
    print("Empréstimo não autorizado")
else:
    print("Empréstimo autorizado")

#rodapé
print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
