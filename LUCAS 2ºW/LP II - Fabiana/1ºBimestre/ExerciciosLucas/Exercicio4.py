"""Faça um programa que receba o valor do salário mínimo, o número de
horas trabalhadas, o número de dependentes do funcionário e a
quantidade de horas extras trabalhadas. Calcule o salário a receber do
funcionário seguindo as regras abaixo:
 O valor da hora trabalhada é igual a 1/5 do salário mínimo
 O salário do mês é igual ao número de horas trabalhadas vezes o valor
da hora trabalhada
 Para cada dependente acrescimo de 32 reais
 Para cada hora extra trabalhada o cálculo do valor da hora trabalhada
acrescida de 50%
 O salário bruto é igual ao salário do mês mais os valores dos
dependentes mais os valores das horas extras
 O calculo do valor do imposto de renda retido na fonte segue a tabela
abaixo:
IRRF   | SALÁRIO BRUTO
ISENTO | INFERIOR A 1000
10%    | DE 1000 ATÉ 1500
20%    | SUPERIOR A 1500
 O salário líquido é igual ao salário bruto menos IRRF
 A gratificação segue a próxima tabela:

SALÁRIO LIQUIDO GRATIFICAÇÃO
ATÉ 1700        | 100 REAIS
SUPERIOR A 1700 | 50 REAIS

Exibir todos os calculos:
 Valor da hora trabalhada
 Salário do mês
 Valor dos dependentes
 Valor da hora extra
 Valor a receber das horas extras
 Salário bruto
 Valor do imposto
 Salário liquido
 Valor da gratificação
 Salário a receber """
#cabeçalho
print("-"*80)
print("Exercício 4".center(80))
print("-"*80)

#entrada
salarioMinimo = float(input("Digite o valor do seu salário mínimo: "))
horasTrabalhadas = int(input("Digite o número de horas trabalhadas: "))
dependentes = int(input("Digite o número de dependentes: "))
horaExtra = int(input("Digite a quantidade de horas extras trabalhadas: "))

#cálculos
valorHora=salarioMinimo/5
salarioMes=valorHora*horasTrabalhadas
valorDependentes=dependentes*32
valorHoraX=valorHora*1.50
receberExtra=horaExtra*valorHoraX
salarioBruto=salarioMes+valorDependentes+receberExtra

if salarioBruto<1000:
    imposto=0
elif salarioBruto>=1000 and salarioBruto<=1500:
    imposto=salarioBruto*0.10
else:
    imposto=salarioBruto*0.20

salarioLiquido=salarioBruto-imposto

if salarioLiquido<=1700:
    gratificacao=100
else:
    gratificacao=50

salarioReceber=salarioLiquido+gratificacao

#saída
print(f"O valor da hora trabalhada é R$ {valorHora:.2f}")
print(f"O salário do mês é R$ {salarioMes:.2f}")
print("O valor dos dependentes é R$ ", valorDependentes)
print(f"O valor da hora extra é R$ {valorHoraX:.2f}")
print(f"O valor a receber da hora extra é R$ {receberExtra:.2f}")
print(f"O valor do salário bruto é R$ {salarioBruto:.2f}")
print(f"O valor do imposto é R$ {imposto:.2f}")
print(f"O valor do salário líquido é R$ {salarioLiquido:.2f}")
print("O valor da gratificação é R$ ", gratificacao)
print(f"O valor do salário a receber é R$ {salarioReceber:.2f}")

##rodapé
print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)

