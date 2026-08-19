print("-"*80)
print("Exemplo - while true".center(80))
print("-"*80)

while True:
    num = int(input("Digite um número: "))
    #para interromper o laõ usamos o break
    if num == 0:
        break
    print("Você digitou: ", num)

print("-"*80)
print("Fim do programa!".center(80))
