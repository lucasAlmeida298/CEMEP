'''3. Sabe-se que o quilowatt de energia custa um quinto do salário mínimo.
Faça um programa que receba o valor do salário mínimo e a quantidade de
quilowatts gasta por uma residência. Calcule e exiba:
 O valor, em reais, de cada quilowatt
 O valor, em reais, a ser pago por essa residência
 O novo valor a ser pago por essa residência, a partir de um desconto de
15%'''

#cabeçalho
print ("="*80)
print ("Exercício 3".center(80))
print ("="*80)

#entrada
salarioMinimo = float(input("Digite o salário mínimo: "))
quantQuilowatt = int(input("Digite a quantidade de quilowatts gasta: "))

#processamento
valorQuilowatt = salarioMinimo/5
valorResidencia = quantQuilowatt*valorQuilowatt
valorDesconto = valorResidencia*0.15
desconto = valorResidencia-valorDesconto

#saída
print ("\nO valor do quilowatt é: ", valorQuilowatt)
print ("O valor a ser pago pela residência é: ", valorResidencia)
print ("O valor a ser pago com desconto pela residência é: ", desconto)

#rodapé
print ("="*80)
print("Desenvolvido por Lucas".center(80))
print ("="*80)
