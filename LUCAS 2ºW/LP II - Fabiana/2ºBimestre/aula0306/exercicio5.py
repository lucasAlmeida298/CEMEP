"""5. Faça um programa que receba uma frase e exiba:
(A) Contar quantas vezes apareceu a letra ‘o’ na frase.
(B) Em que posição ela apareceu a primeira vez.
(C) Em que posição ela apareceu a última vez.
(D) Exibir a quantidade de letras da string.
(E) Verificar se existe a palavras Python na frase (usar decisão decisão).
(F) Verificar se a frase começa com a palavra Python.
(G) Verificar se a frase termina com a palavra Python.
(H) Quantas letras tem a primeira palavra.
(I) Quantas letras tem a última palavra.
(J) Quantidade de letras ao todo sem considerar espaços.
(K) Exibir a primeira palavra.
(L) Exibir a última palavra."""
print("-"*80)
print("Exercício 5 - 03/06/2026".center(80))
print("-"*80)

frase = input("Digite uma frase: ")

print("A letra 'o' aparece ", frase.lower().count("o") , " vezes na frase")
print("A letra 'o' aparece pela primeira vez na posição: ", frase.lower().find("o"))
print("A letra 'o' aparece pela última vez na posição: ", frase.lower().rfind("o"))









print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
