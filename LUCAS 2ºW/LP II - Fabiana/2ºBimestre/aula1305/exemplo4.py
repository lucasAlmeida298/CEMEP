"""O método count() retorna o número de vezes que um valor
especificado aparece na string"""

#exemplo 1
#vamos contar quantas vezes aparece a letra "o" no texto
texto = "Linguagem de Programação Python"
qtd_o = texto.count("o")
print ("A quantidade de letras 'o' no texto é: ", qtd_o)

#exemplo 2
#podemos exibir a quantidade direto no print
texto1 = "Linguagem de Programação Python"
print ("A quantidade de letras 'o' no texto é: ", texto1.count("o"))

#exemplo 3
#contando espaços
texto2 = "Linguagem de Programação Python"
print ("A quantidade de espaços em branco no texto é ", texto2.count(' '))

#exemplo 4
#contando palavras
texto3 = "Eu amo morango, morango é minha fruta preferida"
print ("A palavra morango aparece ", texto3.count("morango") ," vezes")

#exemplo 5
"""Se você quiser contar as ocorrências de um carácter ignorando
maiúsculas e minúsculas, pode converter o texto para minúsculas
ou maiúsculas antes de contar"""

#contando caracter independente de estar maiusculo ou minusculo

texto4 = "Olá mundo"
cont_o1 = texto4.lower().count("o")
print ("A quantidade de letras 'o' no texto é: ", cont_o1)
