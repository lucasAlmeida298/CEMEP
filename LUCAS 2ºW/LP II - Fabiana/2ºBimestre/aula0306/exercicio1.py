"""1. Peça ao usuário uma palavra e exiba:
 Os três primeiros caracteres.
 Os três últimos caracteres.
 A palavra invertida."""
print("-"*80)
print("Exercício 1 - 03/06/2026".center(80))
print("-"*80)
palavra = input("Digite uma palavra: ")

print("Três primeiros caracteres: ", palavra[0:3])
print("Três últimos caracteres: ", palavra[-3:])
print("A palavra invertida: ", palavra[::-1])

print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
