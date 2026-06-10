"""6. Faça um programa que receba uma frase e verifique se a string é um
palíndromo (lê-se igual de trás pra frente, desconsiderando espaços e
maiúsculas) ."""
print("-"*80)
print("Exercício 6 - 03/06/2026".center(80))
print("-"*80)

frase = input("Digite uma frase: ")
inverter = frase[::-1]

if inverter==frase:
    print("Sua frase é um palíndromo")
else:
    print("Sua frase não é um palíndromo")











print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
