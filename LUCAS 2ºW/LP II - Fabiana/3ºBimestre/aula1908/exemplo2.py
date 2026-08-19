print("-"*80)
print("Exemplo - While true".center(80))
print("-"*80)

while True:
    print("1 - Cadastrar")
    print("2 - Consultar")
    print("3 - Sair")
    option = int(input("Escolha uma opção: "))
    if option==1:
        print("Cadastrando...em construção")
    elif option==2:
        print("consultando...em construção")
    elif option==3:
        break
    else:
        print("Opção inválida")
        print("-"*80)
print("Fim do programa!".center(80))
