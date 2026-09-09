"""2. Foi realizada uma pesquisa de algumas características físicas da
população de uma certa região. Foram entrevistadas um grupo
pessoas e coletados os seguintes dados:  
a- sexo: M (masculino) e F (feminino)
b- cor dos olhos: A (azuis), V (verdes) e C (castanhos)
c- cor dos cabelos: L (louros), C (castanhos) e P (pretos)
d- idade
Deseja-se saber:
o Quantidade de pessoas do sexo feminino
o Quantidade de pessoas do sexo masculino
o A maior idade do grupo
o A média da idade dos homens
o A media da idade das mulheres
o A quantidade de indivíduos do sexo feminino, cuja idade
está entre 18 e 35 anos e que tenham olhos verdes e
cabelos louros.
o Quantidade de pessoas com cabelos castanhos e olhos
castanhos
o Porcentagem de homens com cabelos castanhos e olhos
azuis sobre o total de homens
o Porcentagem de mulheres com cabelos pretos e olhos
verdes sobre o total de mulheres"""

print("-"*80)
print("Exercício 2".center(80))
print("-"*80)

countF=0
countM=0
maiorIdade=0
idM=0
idF=0
quantF18e35=0
quantCC=0
quantHCA=0
quantFPV=0

while (True):
    sexo=input("\nInforme seu sexo (M-Masculino/F-Feminino): ").upper()
    print("\n(A-Azul/V-Verde/C-Castanho)")
    corOlho=input("Informe a cor de seus olhos: ").upper()
    print("\n(L-Loiro/C-Castanho/P-Preto)")
    corCabelo=input("Informe a cor do seu cabelo: ").upper()
    idade=int(input("\nInforme sua idade: "))

    if idade>maiorIdade:
        maiorIdade=idade

    if corCabelo=='C' and corOlho=='C':
        quantCC+=1

    if sexo=='F':
        countF+=1
        idF+=idade
        if idade>=18 and idade<=35 and corOlho=='V' and corCabelo=='L':
            quantF18e35+=1
        if corCabelo=='P' and corOlho=='V':
            quantFPV+=1
    elif sexo=='M':
        countM+=1
        idM+=idade
        if corCabelo=='C' and corOlho=='A':
            quantHCA+=1
    else:
        print("Sexo informado inválido! Encerrando o programa!")
        break
    
    opcao=input("\nDeseja continuar? (S-Sim/N-Não): ").upper()
    if opcao=='N':
        break

percentFPV=0
percentHCA=0


print(f"\nA quantidade de pessoas do sexo feminino é: {countF}")
print(f"A quantidade de pessoas do sexo masculino é: {countM}")
print(f"A maior idade do grupo é: {maiorIdade}")
if countM>0:
    print(f"A média de idade dos homens é de {idM/countM} anos")
    percentHCA=(quantHCA/countM)*100
else:
    print(f"Não há homens suficiente para calcular a média de idade")

if countF>0:
    print(f"A média de idade das mulheres é de {idF/countF} anos")
    percentFPV=(quantFPV/countF)*100
else:
    print(f"Não há mulheres suficiente para calcular a média de idade")

print(f"A quantidade de mulheres que tem entre 18 e 35 anos, olhos verdes e cabelo loiro é: {quantF18e35}")
print(f"A quantidade de pessoas com cabelos e olhos castanhos é: {quantCC}")
print(f"A porcentagem de homens com cabelos castanhos e olhos azuis é de: {percentHCA}%")
print(f"A porcentagem de mulheres com cabelos pretos e olhos verdes é de: {percentFPV}%\n")

print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)