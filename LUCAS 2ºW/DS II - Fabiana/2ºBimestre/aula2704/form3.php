<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora calorias</title>
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
            <td align="center">
                <h1>Exercício 3</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Paulínia, 27 de Abril de 2026</h3>
            </td>
        </tr>
        <tr>
            <td>
                <table align="center" width="45%">
                    <tr class="fundo">
                        <td align="center">
                            <h4>Prato</h4>
                        </td>
                        <td align="center">
                            <h4>Sobremesa</h4>
                        </td>
                        <td align="center">
                            <h4>Bebida</h4>
                        </td>
                    </tr>
                    <tr class="fundot">
                        <td align="center">
                            <h4>1-Vegetariano</h4>
                        </td>
                        <td align="center">
                            <h4>1-Abacaxi</h4>
                        </td>
                        <td align="center">
                            <h4>1-Chá</h4>
                        </td>
                    </tr>
                    <tr class="fundot">
                        <td align="center">
                            <h4>2-Peixe</h4>
                        </td>
                        <td align="center">
                            <h4>2-Sorvete diet</h4>
                        </td>
                        <td align="center">
                            <h4>2-Suco de laranja</h4>
                        </td>
                    </tr>
                    <tr class="fundot">
                        <td align="center">
                            <h4>3-Frango</h4>
                        </td>
                        <td align="center">
                            <h4>3-Mousse diet</h4>
                        </td>
                        <td align="center">
                            <h4>3-Suco de limão</h4>
                        </td>
                    </tr>
                    <tr class="fundot">
                        <td align="center">
                            <h4>4-Carne</h4>
                        </td>
                        <td align="center">
                            <h4>4-Mousse chocolate</h4>
                        </td>
                        <td align="center">
                            <h4>4-Refrigerante</h4>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <form action="recebeDados3.php" method="post">
                    <h4>Cliente: </h4><input type="text" name="cliente"
                        placeholder="Digite seu nome" size="20">
                    <h4>Prato: <input type="text" name="prato" size="10"
                            placeholder="Digite o número"></h4>
                    <h4>Sobremesa: <input type="text" name="sobremesa" size="10"
                            placeholder="Digite o número"></h4>
                    <h4>Bebida: <input type="text" name="bebida" size="10"
                            placeholder="Digite o número"></h4>
                    <input type="submit" name="enviar" value="Enviar Dados">
                </form>
            </td>
        <tr>
            <td align="center">
                <h3>Desenvolvido por Lucas</h3>
            </td>
        </tr>
        </tr>
</body>

</html>