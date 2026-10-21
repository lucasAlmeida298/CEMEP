"""Uma empresa decidiu fazer um levantamento em relação aos candidatos que
se apresentarem para preenchimento de vagas no seu quadro de funcionários.
Supondo que você seja o programador dessa empresa, faça um programa que leia
para cada candidato a idade, o sexo(m/f) e a experiência no serviço (s ou n).
Para encerrar a entrada de dados, digite zero pra idade. Calcule e escreva:
- O número de candidatos do sexo feminino e masculino
- Porcentagens dos homens com mais de 45 anos entre o total de homens
- Idade média dos homens que tem experiência em serviço
- O número de mulheres com a idade inferior a 35 anos com experiência
- A menor idade entre as mulheres que já tem experiência no serviço"""

countM = 0
countF = 0
countM45 = 0
countMExp = 0
idadeMExp = 0
countF35Exp = 0
menorIdade = 99999999
while True:
    idade = int(input("Digite sua idade: "))
    if idade==0:
        break
    sexo = input("Digite seu sexo (M-Masculino/F-Feminino): ").upper()
    exp = input("Tem experiência no serviço?(S-Sim/N-Não): ").upper()

    if sexo=='M':
        countM+=1
        if exp=='S':
            countMExp+=1
            idadeMExp+=idade
        if idade>45:
            countM45+=1
    

    if sexo=='F':
        countF+=1
        if exp=='S':
            if idade<35:
                countF35Exp+=1
            if menorIdade>idade:
                menorIdade=idade

if countM > 0:
    percentM45 = (countM45/countM)*100
else:
    percentM45 = 0

if countMExp > 0:
    mediaMExp=idadeMExp/countMExp
else:
    mediaMExp=0

print (f"Número de candidatos do sexo masculino: {countM}")
print (f"Número de candidatos do sexo feminino: {countF}")
print (f"A porcentagem de homens com mais de 45 anos entre o total é: {percentM45:.0f}%")
print (f"A média da idade dos homens que tem experiência em serviço é: {mediaMExp:.1f} anos")
print (f"O número de mulheres com experiência em serviço e menor que 35 anos é: {countF35Exp} mulheres")

if menorIdade!=99999999:
    print (f"A menor idade entre as mulheres com experiência é: {menorIdade} anos")
else:
    print(f"Nenhuma mulher com experiência foi cadastrada")