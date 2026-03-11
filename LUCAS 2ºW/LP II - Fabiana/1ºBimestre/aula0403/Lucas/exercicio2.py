'''2. Faça um programa para efetuar a venda de um determinado produto. Este
programa deve receber o nome do produto, a quantidade vendida e o valor
unitário. Calcular e exibir:
 O valor total a pagar
 O valor total a pagar com desconto de 15%
 Comissão do vendedor – 5% do valor total a pagar'''

#cabeçalho
print ("="*80)
print ("Exercício 2".center(80))
print ("="*80)

#entrada
produto = input("Digite o nome do seu produto: ")
quantVendida = int(input("Digite a quantidade vendida desse produto: "))
valorUnitario = float(input("Digite o valor unitário do produto: "))

#processamento
valorTotal = quantVendida*valorUnitario
valorDesconto = valorTotal*0.15
desconto = valorTotal-valorDesconto
comissao = valorTotal*0.05

#saída
print ("\nO total a pagar no produto ", produto ," é: ", valorTotal)
print ("O valor a pagar com desconto é: ", desconto)
print ("A comissão do funcionário é: ", comissao)

#rodapé
print ("="*80)
print("Desenvolvido por Lucas".center(80))
print ("="*80)
