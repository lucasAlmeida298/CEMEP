"""O método len() retorna o número de itens em um objeto. Quando
o objeto é uma string a função len() retorna o número de caracteres
da string."""

#exemplo 1
#podemos armazenar o resultado (tamanho da string) em uma variável
frase = "Linguagem de programação python"

tamanho = len(frase)
print ("O tamanho da string é de ", tamanho ," caracteres")

#exemplo 2
#podemos exibir o tamanho da string direto no print
frase2 = "Linguagem de programação python"
print ("O tamanho da string é de ", len(frase2) ," caracteres")

#exemplo 3
#recebendo a frase do usuario
frase3 = input("Digite uma frase: ")
tamanho3 = len(frase3)
print ("O tamanho da string é de ", tamanho3 ," caracteres")

