#Contando quantos números são pares

quantidadePares = 0 
for i in range(5):
    numero = int(input("Digite um número: "))
    if numero % 2 == 0:
        quantidadePares+=1

print("Quantidade de pares: ", quantidadePares)