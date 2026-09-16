"""For com if, podemos colocar uma condição dentro
do for. Exemplo verificar se o número é par de 1 a 10"""

print("-" * 30)
for numero in range (1, 11):
    if numero%2==0:
        print(numero, " é par")
    else:
        print(numero, " é ímpar")
