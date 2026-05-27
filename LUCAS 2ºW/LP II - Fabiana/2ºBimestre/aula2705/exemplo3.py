"""O método split() em Python é usado para dividir uma string em uma
lista de substrings, com base em um caractere ou string especificada
como separados.
Síntaxe:
String.split(separados,maxsplit)
Parâmetros
- separador: o caractere ou string que será usado como separador.
  Se não for especificado, o padrão é qualquer espaço em branco
  (espaço, tabulação, etc.).
- maxsplit: o número máximo de divisões que serão feitas. Se não
  for especificado, todas as ocorrências do separador serão
  consideradas."""

#split por espaços em branco
frase = "Olá mundo Python"
print (frase)
palavras = frase.split()
print(palavras)
#usando regra de fatiamento para exibição dos dados
print(palavras[0]) #exibindo apenas a palavra ola
print(palavras[1]) #exibindo apenas a palavra mundo
print(palavras[2]) #exibindo apenas a palavra python
print(palavras[-1]) #exibindo apenas a palavra python
#['Ola', 'mundo', 'python']

#split por vírgula
frase = "maçã, banana, laranja"
print(frase)

frutas = frase.split(',')
print(frutas)
#'maçã', 'banana', 'laranja')

#split com maxsplit
frase = "Olá mundo Python é divertido"
palavras = frase.split(' ', 2)
print(palavras)
#['Ola', 'mundo, 'Python é divertido']
"""Observações:
-Se o separador não for encontrado na string, a lista resultante conterá apenas a string
original
-Se a string estiver vazia, a lista resultante será vazia. O método split() é muito útil para
processar string e extrair informações relevantes."""
