"""O método strip() é usado para remover espaços em branco de ambos os
lados de uma string. Este método não aceita nenhum argumento.
Síntaxe:
<string>.strip()"""

#exemplo
#"texto com espaço em branco no início e no fim."
texto = "     texto com espaço embranco no início e no fim.     "
print(texto)
sem_espaco =  texto.strip()
print(sem_espaco)

#Retirando possíveis espaços no input
texto1 = input("Digite um texto: ")
print(texto1)
print(texto1.strip())

#usando strip direto no input
texto2 = input("Digite um texto: ").strip()
print(texto2)

"""O método lstrip() remove o espaço em branco do lado esquerdo.
síntaxe <string>.lstrip()"""

#Exemplo:
texto = "    Texto com espaço em branco no início e no fim.   "
remove_esquerda = texto.lstrip()
print(remove_esquerda)

"""O método rstrip() remove o espaço em branco do lado direito.
síntaxe <string>.rstrip()"""

#Exemplo:
texto = "    Texto com espaço em branco no início e no fim.   "
remove_direita = texto.rstrip()
print(remove_direita)
