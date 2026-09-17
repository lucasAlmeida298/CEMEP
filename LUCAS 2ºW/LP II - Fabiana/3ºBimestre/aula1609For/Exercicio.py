print("-"*80)
print(f"Reserva de Quartos".center(80))
print("-"*80)

i=0
valorArrecadado=0
totalHospedes=0
maiorHospedagem=0

while (True):
    i+=1
    print("-"*80)
    print (f"Reserva nº {i}")
    nome = input(f"Informe o nome do hóspede: ")
    quantDias = int(input(f"Informe a quantidade de dias na hospedagem: "))
    quantPessoas = int(input(f"Informe a quantidade de pessoas que utilizarão da hospedagem: "))
    valor = float(input(f"Informe o valor da diária: "))

    somaValores=0

    for dia in range(1, quantDias+1):
        valorDia = float(input(f"Dia {dia} - Informe o valor do consumo: "))
        somaValores+=valorDia
    
    valorTotal=(quantDias*valor)+somaValores

    print("="*10, "Resumo da reserva", "="*10)
    print(f"Hóspede: {nome}")
    print(f"Dias: {quantDias}")
    print(f"Valor das diárias: {valor*quantDias}R$")
    print(f"Valor de consumo: {somaValores}")
    print(f"Total: {valorTotal}R$")

    totalHospedes+=quantPessoas
    valorArrecadado+=valorTotal

    if valorTotal>maiorHospedagem:
        maiorHospedagem=valorTotal

    resposta = int(input(f"Deseja continuar? (1-SIM/2-NÃO): "))
    if resposta==1:
        resposta=resposta
    elif resposta==2:
        break
    else:
        print(f"Resposta inválida, encerrando o programa!")
        break


print(f"-"*80)

print(f"Quantidade total de reservas: {i}")
print(f"Quantidade total de hóspedes: {totalHospedes}")
print(f"Valor total arrecadado: {valorArrecadado}R$")
print(f"Maior hospedagem: {maiorHospedagem}R$")

print(f"-"*80)
print(f"Desenvolvido por Lucas - 16/09/2026".center(80))
print(f"-"*80)