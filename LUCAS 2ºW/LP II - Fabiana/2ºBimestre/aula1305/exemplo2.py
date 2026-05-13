"""O método title() retorna uma string em que o primeiro caracter
de cada palavra é maiusculo. Como um cabeçalho ou um título.
Se a palavra contiver um número ou um símbolo, a primeira letra depois
disso será convertido em maiúsculo"""

print("-"*80)
print("Exemplo 2 - 13/05/2026".center(80))
print("-"*80)

#exemplo 1
frase = input("Digite a primeira frase: ").title()
print (frase)

#exemplo 2
texto = "BOA TARDE"
x = texto.title()
print (x)

"""O método capitalize() retorna uma string onde o primeiro caracter
é maiúsculo e e o resto é minúsculo"""

#exemplo 1
frase2 = input("Digite a primeira frase: ").capitalize()
print (frase2)

#exemplo 2
texto2 = "BOA TARDE"
x2 = texto2.capitalize()
print (x2)

print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
