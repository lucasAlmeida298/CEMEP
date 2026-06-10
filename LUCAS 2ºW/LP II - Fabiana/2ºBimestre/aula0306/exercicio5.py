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

frase = input("Digite uma frase: ").lower()

quantidade_o = frase.count('o')
print(f"A) Quantidade da letra 'o': {quantidade_o}")

if 'o' in frase:
    primeira_o = frase.lower().find('o')
    ultima_o = frase.lower().rfind('o')
    print(f"B) Primeira posição da letra 'o': {primeira_o}")
    print(f"C) Última posição da letra 'o': {ultima_o}")
else:
    print("B e C) A letra 'o' não aparece na frase.")

print(f"D) Quantidade de caracteres (com espaços): {len(frase)}")

palavras = frase.split()

if "python" in palavras:
    print("E) A palavra 'Python' existe na frase: Sim")
else:
    print("E) A palavra 'Python' existe na frase: Não")

if frase[:len("python")] == "python":
    print("F) A frase começa com 'Python'")
else:
    print("F) A frase não começa com 'Python'")

if frase[-len("python"):] == "python":
    print("G) A frase termina com 'Python'")
else:
    print("G) A frase não termina com 'Python'")

if len(palavras) > 0:
    print(f"H) Letras na primeira palavra: {len(palavras[0])}")
    print(f"I) Letras na última palavra: {len(palavras[-1])}")
    print(f"K) Primeira palavra: {palavras[0]}")
    print(f"L) Última palavra: {palavras[-1]}")
else:
    print("H, I, K, L) A frase está vazia ou contém apenas espaços.")

letras_sem_espacos = sum(len(p) for p in palavras)
print(f"J) Quantidade de letras (sem espaços): {letras_sem_espacos}")

print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
