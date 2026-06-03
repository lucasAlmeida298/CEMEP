"""3. Peça ao usuário uma frase e informe:
 Quantas palavras ela possui.
 A primeira palavra.
 A última palavra.
 A frase em maiúsculas.
 A frase em minúsculas.
 A frase com a primeira letra maiúscula"""
print("-"*80)
print("Exercício 3 - 03/06/2026".center(80))
print("-"*80)

frase = input("Digite uma frase: ")


nPalavras = frase.count(" ")+1
pEspaco = frase.find(" ")
uEspaco = frase.rfind(" ")

print("A frase possui ", nPalavras ," palavras")
print("A primeira palavra da frase é: ", frase[0:pEspaco])
print("A última palavra da frase é: ", frase[uEspaco:])
print("A frase em maiúsculas: ", frase.upper())
print("A frase em minúsculas: ", frase.lower())
print("A frase com a primeira letra maiúscula: ", frase.capitalize())

print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
