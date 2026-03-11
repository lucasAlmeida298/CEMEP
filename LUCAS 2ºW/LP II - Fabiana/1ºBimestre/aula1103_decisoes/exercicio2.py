"""Faça um programa que receba o código correspondente ao cargo de um
funcionário e seu salário atual. O programa deverá exibir no final o
cargo do funcionário, o salário reajustado e o percentual de aumento
ao qual este funcionário tem direito, seguindo a tabelha abaixo:

Código      Cargo       Percentual
  1      Escrituário        50%
  2      Secretário         35%
  3        Caixa            20%
  4       Gerente           10%
  5       Diretor            5%
ou código inválido"""
print ("-"*80)
print ("Exercício 2".center(80))
print ("-"*80)
cargo = float(input("Informe seu cargo: "))
salario = float(input("Informe seu salário: "))
if (cargo==1):
    salarioReajustado=salario*1.50
    print("Seu cargo é de Escrituário")
    print("Seu salário reajustado é de: ", salarioReajustado)
    print("Seu percentual de aumento foi de 50%")
elif (cargo==2):
    salarioReajustado=salario*1.35
    print("Seu cargo é de secretário")
    print("Seu salário reajustado é de: ", salarioReajustado)
    print("Seu percentual de aumento foi de 35%")
elif (cargo==3):
    salarioReajustado=salario*1.20
    print("Seu cargo é de caixa")
    print("Seu salário reajustado é de: ", salarioReajustado)
    print("Seu percentual de aumento foi de 20%")
elif (cargo==4):
    salarioReajustado=salario*1.10
    print("Seu cargo é de gerente")
    print("Seu salário reajustado é de: ", salarioReajustado)
    print("Seu percentual de aumento foi de 10%")
elif (cargo==5):
    salarioReajustado=salario*1.05
    print("Seu cargo é de diretor")
    print("Seu salário reajustado é de: ", salarioReajustado)
    print("Seu percentual de aumento foi de 5%")
else:
    print("Cargo inexistente")
    
print("Fim do programa")
print ("-"*80)
print ("Desenvolvido por Lucas".center(80))
print ("-"*80)
