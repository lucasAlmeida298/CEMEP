"Podemos utilizar f-string com dados digitados pelo usuário"
nome=input("Digite seu nome: ")
idade=int(input("Digite sua idade: "))
print(f"Olá, {nome}! Você tem {idade} anos.")

#E se eu quiser mostrar as chaver {} literamente?
#nesse caso, utilizamos chaves duplicadas
print(f"Para utilizar uma variável, escreva {{nome}} no exemplo")