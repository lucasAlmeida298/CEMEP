"""Faça um programa que receba o salário de um funcionário, calcule e exiba o salário reajustado,
de acordo com as seguintes regras: salários até 900, reajuste de 50%, salários maiores que 900,
reajuste de 30%"""
print ("-"*80)
print ("Exercício 1".center(80))
print ("-"*80)
salario = float(input("Informe seu salário: "))
if (salario>=0 and salario<=900):
    salarioReajustado=salario*1.50
    print("Seu salário reajustado é de: ", salarioReajustado)
elif (salario>900):
    salarioReajustado=salario*1.30
    print("Seu salário reajustado é de: ", salarioReajustado)

print("Fim do programa")
print ("-"*80)
print ("Desenvolvido por Lucas".center(80))
print ("-"*80)
    
