"""Queremos solicitar 5 números ao usuário e realizar a soma deles"""

soma = 0
for i in range (5):
    numero = int(input("Digite um número: "))
    soma+=numero

print("Soma: ", soma)