'''5. Faça um programa que receba que receba o ano de nascimento de uma
pessoa. Calcule e exiba:
 A idade da pessoa
 A idade em dias
 A idade em meses
 A idade em horas
 A idade em minutos'''

#cabeçalho
print ("="*80)
print ("Exercício 5".center(80))
print ("="*80)

#entrada
anoNascimento = int(input("Digite o ano de seu nascimento: "))

#processamento
idade = 2026-anoNascimento
dias = idade*365
meses = dias/30
horas = dias*24
minutos = horas*60

#saída
print ("Sua idade é: ", idade)
print ("Sua idade em dias é: ", dias)
print ("Sua idade em meses é: ", meses)
print ("Sua idade em horas é: ", horas)
print ("Sua idade em minutos é: ", minutos)

#rodapé
print ("="*80)
print("Desenvolvido por Lucas".center(80))
print ("="*80)
