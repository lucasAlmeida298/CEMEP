#center()
"""Retorna uma string centralizada em um comprimento especificado.
O preenchimento é feito usando o caratere especificado (O padrão é
um espaço)."""

#Exemplo1:
#centralizando o texto em 50 espaços
texto = "Linguagem de programação"
x = texto.center(50)
print (x)

#Exemplo2:
texto = "Linguagem de programação"
#preenchendo os espaços em branco com o caracter "="
x = texto.center(50, "=")
print(x)

#Exemplo3:
#centralizando o texto em 50 espaços, direto no print
print("Linguagem de Programação".center(50))

#ljust()
"""O método ljust alinhará a string à esquerda, usando um caracter
especificado (espaço é o padrão) como caracter de preenchimento."""

#Exemplo1:
#justificando o texto à esquerda em 50 espaços
texto = "Linguagem de Programação"
x = texto.ljust(50)
print (x)

#Exemplo2
texto = "Linguagem de Programação"
#preenchendo os espaços em branco com o caracter "="
x = texto.ljust(50, "=")
print(x)

#Exemplo3:
#justificando o texto à esquerda em 50 espaços
print("Linguagem de Programação".ljust(50))

#rjust
"""O método rjust alinhará a string à direita, usando um caracter
especificado (espaço é o padrão) como caracter de preenchimento."""

#Exemplo1:
#justificando o texto à direita em 50 espaços
texto = "Linguagem de Programação"
x = texto.rjust(50)
print (x)

#Exemplo2
texto = "Linguagem de Programação"
#preenchendo os espaços em branco com o caracter "="
x = texto.rjust(50, "=")
print(x)

#Exemplo3:
#justificando o texto à direita em 50 espaços
print("Linguagem de Programação".rjust(50))

