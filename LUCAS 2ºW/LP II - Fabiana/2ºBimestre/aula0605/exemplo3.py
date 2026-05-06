nome = input("Digite seu nome: ").upper()
cidade = input ("Digite o nome da sua cidade: ").upper()
if nome[-5:]=="SILVA":
    print("Seu último nome é Silva")
else:
    print("Seu último nome não é Silva")

if cidade[:5]=="SANTO":
    print("O nome da sua cidade começa com Santo")
else:
    print("O nome da sua cidade não começa com Santo")
