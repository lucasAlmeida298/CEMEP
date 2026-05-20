"""Método index - funciona como o método find(), mas há uma única
diferença entre esses métodos. Ambos os métodos retornam a posição
do texto de busca se a a string existir na string principal.
Se o texto de busca não existir na string principl, o método find()
retorna -1, mas o método index() gera um ValueError."""

#exemplo - procurar a posição de uma letra informada pelo usuário

texto = input("Digite um texto: ")
letra = input("Digite uma letra: ")

#Em python, o operador in é usado para verificar se um elemento
#existe dentro de uma sequência, como: strings, listas, tuplas...
if letra in texto:
    #verifica se a letra existe na string
    posicao = texto.index(letra)
    print("A letra foi encontrada na posicao ", posicao)
else:
    print("A letra não foi encontrada")
