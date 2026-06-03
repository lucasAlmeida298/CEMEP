"""4. Crie um programa que receba um texto digitado pelo usuário e gere um relatório
contendo:
 Texto original.
 Texto sem espaços extras
 Quantidade de palavras
 Texto em maiúsculas
 Texto em minúsculas
 Texto em formato de título
 Texto com a primeira letra maiúscula
 Texto substituindo espaços por _
 Os 10 primeiros caracteres
 Os 10 últimos caracteres
 O texto centralizado em uma largura de 80 caracteres"""
print("-"*80)
print("Exercício 4 - 03/06/2026".center(80))
print("-"*80)

texto = input("Digite um texto: ")

nPalavras = texto.count(" ")+1

print("Texto original: ", texto)
print("Texto sem espaços extras: ", texto.strip())
print("Quantidade de palavras: ", nPalavras)
print("Texto em maiúsculas: ", texto.upper())
print("Texto em minúsculas: ", texto.lower())
print("Texto em formato de títulos: ", texto.title())
print("Texto com a primeira letra maiúscula: ", texto.capitalize())
print("Texto trocando espaço por _: ", texto.replace(" ", "_"))
print("Os primeiros 10 caracteres: ", texto[0:9])
print("Os últimos 10 caracteres: ", texto[-10:])
print("Texto centralizado em uma largura de 80 caracteres: ")
print(texto.center(80)) #mudei de linha pra ficar centralizado mesmo

print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)


