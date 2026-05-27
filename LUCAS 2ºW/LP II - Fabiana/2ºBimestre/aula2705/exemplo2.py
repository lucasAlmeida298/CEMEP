"""O método replace() é usado para substituir uma parte específica de
uma cadeia de carcteres por outra cadeia, se a corresponência for
encontrada. Ele pode receber três argumentos, sendo dois obrigatórios
e um opcional."""

#Exemplo
"""No script a seguir o primeiro replace é usado para substituir a
palavra 'PHP' pela palavra 'Java'."""

texto = "Eu gosto de php, mas gosto mais de python, mesmo assim PHP é legal e eu gosto"
substituicao = texto.replace("PHP", "Java")
#String Original
#Eu gosto de php, mas gosto mais de python, mesmo assim PHP é legal
print("String original: ", texto)
#Eu gosto de Java, mas gosto mais de python, mesmo assim Java é legal
print("String substituída: ",substituicao)

#Exemplo 2
substituicao2 = texto.replace("gosto", "não gosto")
#Eu gosto de php, mas gosto mais de python, mesmo assim PHP é legal
print("String original: ", texto)
#Eu  não gosto de php, mas não gosto mais de python, mesmo assim php é legal
print("String substituída: ",substituicao2)

#Exemplo 3
substituicao3 = texto.replace("gosto", "não gosto", 2)
#Eu gosto de php, mas gosto mais de python, mesmo assim PHP é legal
print("String original: ", texto)
#Eu  não gosto de php, mas não gosto mais de python, mesmo assim php é legal
print("String substituída: ",substituicao3)

