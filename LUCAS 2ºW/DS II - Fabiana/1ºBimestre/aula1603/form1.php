<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Compras</title>
    <style>
        body {
            background-color: #f5f1e5;

        }

        h2,
        h4,
        h3 {
            font-family: "Montserrat";
            margin-bottom: 5px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h3>Exercício 1</h3>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h2>DS - 16/03/2026</h2>
            </td>
        </tr>
        <tr>
            <td>
                <form action="recebe1.php" method="post">
                    <h4>Nome do cliente: </h4><input type="text" name="nomeCliente"
                        placeholder="Digite o nome do cliente" size="60">
                    <h4>Data: </h4><input type="date" name="data"
                        size="40">
                    <h4>Vendedor: </h4><input type="text" name="vendedor"
                        placeholder="Digite o nome do vendedor" size="50">
                    <h4>Valor da 1ª compra a vista: </h4><input type="text" name="valor1"
                        placeholder="Digite o valor" size="7"><br><br>
                    <h4>Valor da 2ª compra a vista: </h4><input type="text" name="valor2"
                        placeholder="Digite o valor" size="7"><br><br>
                    <h4>Valor da 1ª compra a prazo: </h4><input type="text" name="valor3"
                        placeholder="Digite o valor" size="7"><br><br>
                    <h4>Valor da 2ª compra a prazo: </h4><input type="text" name="valor4"
                        placeholder="Digite o valor" size="7"><br><br>
                    <input type="submit" name="enviar" value="Enviar"   >
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <h2 align="center">Desenvolvido por Lucas</h2>
            </td>
        </tr>
    </table>
</body>

</html>