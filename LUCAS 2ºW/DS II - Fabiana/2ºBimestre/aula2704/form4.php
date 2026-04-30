<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete Quero Mais</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    <style>
        h1,
        h3,
        h4 {
            font-family: "Ubuntu Sans", sans-serif;
        }

        .fundo {
            background-color: #4384daff;
            color: white;
        }

        .fundot {
            background-color: #dadadbff;
            color: black;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center" colspan="3">
                <h1>Lanchonete Quero Mais - Exercício 4</h1>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3">
                <h3>Paulínia, 27 de Abril de 2026</h3>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3" class="fundo">
                <h3>Cárdapio</h3>
            </td>
        <tr align="center" class="fundo">
            <td>
                <h4>Código</h4>
            </td>
            <td>
                <h4>Produto</h4>
            </td>
            <td>
                <h4>Preço Unitário (R$)</h4>
            </td>
        </tr>
        <tr align="center" class="fundot">
            <td>
                <h4>100</h4>
            </td>
            <td>
                <h4>Cachorro Quente</h4>
            </td>
            <td>
                <h4>R$ 10,00</h4>
            </td>
        </tr>
        <tr align="center" class="fundot">
            <td>
                <h4>101</h4>
            </td>
            <td>
                <h4>Bauru Simples</h4>
            </td>
            <td>
                <h4>R$ 12,00</h4>
            </td>
        </tr>
        <tr align="center" class="fundot">
            <td>
                <h4>102</h4>
            </td>
            <td>
                <h4>Bauro com Ovo</h4>
            </td>
            <td>
                <h4>R$ 14,00</h4>
            </td>
        </tr>
        <tr align="center" class="fundot">
            <td>
                <h4>103</h4>
            </td>
            <td>
                <h4>Hamburguer</h4>
            </td>
            <td>
                <h4>R$ 15,50</h4>
            </td>
        </tr>
        <tr align="center" class="fundot">
            <td>
                <h4>104</h4>
            </td>
            <td>
                <h4>Cheeseburguer</h4>
            </td>
            <td>
                <h4>R$ 17,80</h4>
            </td>
        </tr>
        <tr align="center" class="fundot">
            <td>
                <h4>105</h4>
            </td>
            <td>
                <h4>Refrigerante</h4>
            </td>
            <td>
                <h4>R$ 5,00</h4>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <form action="recebeDados4.php" method="post">
                    <h4>Código do item: <input type="text" name="codigo"
                            placeholder="Digite o código do produto" size="20"></h4>
                    <h4>Quantidade: <input type="text" name="quantidade" size="10"
                            placeholder="Digite a quantia"></h4>
                    <input type="submit" name="enviar" value="Enviar Dados">
                </form>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3">
                <h3>Desenvolvido por Lucas</h3>
            </td>
        </tr>
        </tr>
</body>

</html>