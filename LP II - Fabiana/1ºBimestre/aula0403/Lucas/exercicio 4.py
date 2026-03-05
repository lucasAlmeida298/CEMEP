'''4. Considere a seguinte situação: descontam-se inicialmente 10% do salário
bruto do trabalhador como contribuição à previdência social. Após esse
desconto, há um outro desconto de 5% sobre o valor restante do salário
bruto, a título de um determinado imposto. Faça um programa que leia o
salário bruto de um cidadão e imprima o seu salário líquido.'''

#cabeçalho
print ("="*80)
print ("Exercício 4".center(80))
print ("="*80)

#entrada
salarioBruto = float(input("Digite o valor do seu salário bruto: "))

#processamento
valorPrevidencia = salarioBruto*0.10
salarioPrevidencia = salarioBruto-valorPrevidencia
valorImposto = salarioPrevidencia*0.05
salarioLiquido = salarioPrevidencia-valorImposto

#saída
print ("\nO valor da previdência social é: ", valorPrevidencia)
print ("O valor do imposto é: ", valorImposto)
print ("O salário líquido após os descontos é: ", salarioLiquido)

#rodapé
print ("="*80)
print("Desenvolvido por Lucas".center(80))
print ("="*80)
