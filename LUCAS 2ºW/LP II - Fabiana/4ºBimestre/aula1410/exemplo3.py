#formatando numeros com f-string 
produto="caderno"
preco=19.5
print(f"O produto {produto} custa R${preco:.2f}")

"""Mas o que significa :.2f?
: indica que queremos definir uma formatação
.2 indica que queremos duas casas decimas
f indica a formatação do numero como ponto flutuante"""

#veja outro exemplo
valor =150.7896
print(f"valor: R${valor:.2f}")