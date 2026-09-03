"""1. Foi feita uma pesquisa entre os habitantes de uma
região para coletar os seguintes dados: sexo (0 -
feminino, 1 - masculino), idade e altura. Faça um
programa que leia as informações coletadas e mostre as
seguintes informações: (use o comando while) . Utilizar
mensagem para iniciar e continuar o programa. 
a) média da idade do grupo;
b) A maior e a menor idade do grupo
c) média da altura das mulheres;
d) média da idade dos homens;
e) percentual de pessoas com idade entre 35 e 60
anos (inclusive)."""

print("-"*80)
print("Exercício 1".center(80))
print("-"*80)

countM=0
countF=0
acumIdade=0
maiorIdade=0
menorIdade=99999999
AltF=0
IdM=0
percentIdade=0

while (True):
    sexo = int(input("Digite seu sexo (0-Feminino/1-Masculino): "))
    idade = int(input("Digite sua idade: "))
    altura = float(input("Digite sua altura em metros (separada por '.'): "))

    acumIdade+=idade

    if (idade>maiorIdade):
        maiorIdade=idade
    elif (idade<menorIdade):
        menorIdade=idade

    if (idade>=35 and idade<=60):
        percentIdade+=1

    if (sexo==0):
        AltF+=altura
        countF+=1
    elif (sexo==1):
        IdM+=idade
        countM+=1
    else:
        print("Sexo inválido! Nenhum dado será registrado!")
    
    opcao = input("Deseja continuar? (S-Sim/N-Não): ").upper()

    if (opcao=='N'):
        break

media=(percentIdade/(countF+countM))*100

print(f"A média da idade do grupo é de {acumIdade/(countF+countM)}")
print(f"A maior idade do grupo é {maiorIdade} e a menor é {menorIdade}")
print(f"A média das alturas das mulheres é {AltF/countF} metros")
print(f"A média das idade dos homens é {IdM/countM} anos")
print(f"A porcentagem de pessoas entre 35 e 60 anos é de {media}%")

print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)

