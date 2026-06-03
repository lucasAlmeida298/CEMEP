"""2. Peça ao usuário:
 Nome completo
 E-mail
Em seguida:
 Remova espaços desnecessários (inicio e fim).
 Formate o nome usando colocando todas as primeiras letras de cada palavra
em maiúsculo.
 Converta o e-mail para minúsculas.
 Exiba uma mensagem de boas-vindas centralizada com center()."""
print("-"*80)
print("Exercício 2 - 03/06/2026".center(80))
print("-"*80)

nome = input("Digite seu nome completo: ").title()
email = input("Digite seu email: ").lower()

print("Nome completo: ", nome.strip())
print("Email: ", email.strip())
mensagem =("*"*18 + "Bem vindo " + nome + "*"*18)
print(mensagem.center(80))

print("-"*80)
print("Desenvolvido por Lucas".center(80))
print("-"*80)
