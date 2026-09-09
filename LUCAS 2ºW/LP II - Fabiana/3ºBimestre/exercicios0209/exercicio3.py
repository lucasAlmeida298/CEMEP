"""3. Uma loja utiliza os seguintes códigos para as transações de cada
dia:
V – para compras à vista
P – para compras à prazo
É dada uma lista de transações contendo o valor de cada
compra e o respectivo código da transação. Faça um programa
que calcule e exiba:
o Valor total das compras à vista
o Valor total das compras à prazo
o Valor total das compras efetuadas
o Valor a receber pelas compras a prazo, isto é, primeira
parcela, sabendo que estas serão pagas em três vezes"""

print("-"*80)
print("Exercício 3".center(80))
print("-"*80)

totalVista=0
totalPrazo=0

while (True):
    valorCompra=float(input("\nDigite o valor da Compra: "))
    print("\nV-À Vista/P-À Prazo")
    formaPagamento=(input("Informe se o pagamento será a vista o à prazo: ")).upper()

    if formaPagamento=='V':
        totalVista+=valorCompra
    elif formaPagamento=='P':
        totalPrazo+=valorCompra
    else:
        print("Forma de pagamento inválida! Encerrando o programa!")
        break

    opcao=input(("\nDeseja continuar? (S-Sim/N-Não): ")).upper()
    if opcao=='N':
        break

print(f"O valor total das compras à vista é de {totalVista}R$")
print(f"O valor total das compras à prazo é de {totalPrazo}R$")
print(f"O valor total das compras efetuadas é de {totalPrazo+totalVista}R$")
print(f"O valor a receber pelas compras à prazo é de {totalPrazo/3}R$")


print("\n"+"-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)