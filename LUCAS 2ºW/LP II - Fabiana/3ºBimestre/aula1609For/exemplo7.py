"""Faça um programa de cadastro de alunos.
O programa deverá:
1.Perguntar quantos alunos serão cadastrados
2.Para cada aluno, solicitar:
    - nome
    - idade
    - nota
3. Informar se o aluno foi aprovado ou reprovado.
    - aprovado nota deve ser >=6 e <=10.
4. Ao final, mostrar:
    - quantidade de alunos
    - quantidade de aprovados
    quantidade de reprovados"""

print("-"*80)
print("Cadastro de alunos".center(80))
print("-"*80)

quantidade = int(input("Quantos alunos serão cadastrados?: "))

aprovados = 0
reprovados = 0

for aluno in range (quantidade):
    nome=input("nome: ")
    idade=int(input("idade: "))
    nota=float(input("nota: "))

    if nota >= 6 and nota <= 10:
        print(nome, "- Aprovado")
        aprovados+=1
    else:
        print(nome, "- Reprovado")
        reprovados+=1
    
    print("-"*80)

    print("O total de alunos é ", quantidade)
    print("A quantidade de aprovados é ", aprovados)