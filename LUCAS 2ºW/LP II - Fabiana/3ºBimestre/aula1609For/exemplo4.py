"""O for também pode ser utilizado para cálculos.
por exemplo, queremos somar os números de 1 até 5."""

#Criamos uma variável para armazenar a soma:
soma = 0 #acumulador
for numero in range (1, 6):
    soma+=numero 
    print (soma)
print("Soma: ", soma)