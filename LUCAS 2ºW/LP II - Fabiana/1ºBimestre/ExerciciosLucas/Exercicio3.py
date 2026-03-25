"""Um estacionamento cobra valores diferentes de acordo com o tempo que o
veículo permaneceu no local.
Crie um programa que solicite ao usuário o tempo de permanência no
estacionamento em horas.

De acordo com o tempo informado, o programa deve calcular o valor a ser
pago seguindo a tabela:
Tempo estacionado Valor
Até 1 hora R$ 5,00
Mais de 1 até 3 horas R$ 8,00
Mais de 3 até 6 horas R$ 12,00
Mais de 6 horas R$ 15,00
O programa deve mostrar:
 o tempo informado
 o valor total a ser pago"""
#cabeçalho
print("-"*80)
print("Exercício 3".center(80))
print("-"*80)

#entrada
tempo = float(input("Informe quantas horas você permanceu no estacionamento: "))

#saída
print(f"O tempo de permanência no estacionamento foi de {tempo:.2f} horas")
if tempo<=1:
    print("O valor total a ser pago é de R$ 5,00")
elif tempo>1 and tempo<=3:
    print("O valor total a ser pago é de R$ 8,00")
elif tempo>3 and tempo<=6:
    print("O valor total a ser pago é de R$ 12,00")
elif tempo>6:
    print("O valor total a ser pago é de R$ 15,00")
else:
    print("Tempo informado inválido")

#rodapé
print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
