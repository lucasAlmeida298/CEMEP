'''1. Faça um programa que receba o nome, valor da hora trabalhada,
quantidade de hora trabalhada, quantidade de dependentes e valor do
imposto a pagar de um funcionário. Calcular e exibir o salário bruto e o
salário líquido desse funcionário.
Para encontrar o salário bruto e o salário líquido:
 Calcular o salário base: valor da hora trabalhada * quantidade de hora
trabalhada
 Para cada dependente acrescentar 30 reais
 Calcular o salário bruto: salário base + dependentes
 Calcular o salário líquido: salário bruto – valor do imposto'''

#cabeçalho
print("="*80)
print("Exercício 1".center(80))
print("="*80)

#entrada
nome = input("Digite seu nome: ")
valorHora = float(input("Digite o valor da sua hora trabalhada: "))
horaTrabalhada = int(input("Digite quantas horas você trabalha por dia: "))
quantidadeDependentes = int(input("Digite a quantidade dependentes você tem: "))
valorImposto = float(input("Digite o valor do seu imposto: "))

#processamento
salarioBase = valorHora*horaTrabalhada
dependentes = quantidadeDependentes*30
salarioBruto = salarioBase+dependentes
salarioLiquido = salarioBruto-valorImposto

#saída
print ("\nO salário base de ", nome ," é: ", salarioBase) #Quis dar utilidade a variável nome
print ("O valor dos depente de ", nome ," é: ", dependentes)
print ("O salário bruto de ", nome ," é: ", salarioBruto)
print ("O salário líquido de ", nome ," é: ", salarioLiquido)

#rodapé
print("="*80)
print("Desenvolvido por Lucas".center(80))
print("="*80)




                   

                         
