"""Método find() - retorna a posição/índice da primeira
ocorrência de uma substring em uma determinada string. Caso contrário
ele retorna -1"""

#Exemplo:
"""O uso do método find() com um argumento, dois argumentos e três
argumentos são mostrados no seguinte script. A primeira saída será
-1 porque o texto de busca é 'python' e a varável texto não contém
a string 'python'. A segunda saída retornará uma posição válida porque
a palavra 'program' existe após a posição 10. A terceira retornará uma
uma posição válida porque a palavra "apren" existe dentro do intervalo
de 0 a 5"""

texto = "Aprenda programação em Python"""

print(texto.find('python'))
# -1 -  isso significa que a palavra não foi encontrada

print(texto.find('Python'))
# 23 - isso significa que a palavra foi encontrada na posição 23

print(texto.find('program',8))
# 8 - procurando a palavra a partir da posição 8

print(texto.find('Python',0,5))
# procurando a palavra da posição 0 até 5, nesse caso a palavra não foi encontrada, retornando -1
