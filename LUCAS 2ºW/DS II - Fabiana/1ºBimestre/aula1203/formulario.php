<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Lanchonete Almeida</title>
    <style>
        body {
            background-color: #f5f1e5;

        }h2, h4 {
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
                <h2>Exercício</h2>
            </td>
        </tr>
        <tr>
            <td>
                <form action="recebeDados.php" method="post">
                    <h4>Nome do cliente</h4><input type="text" name="nomeCliente"
                        placeholder="Digite o nome do cliente" size="60">
                    <h4>Nome do lanche</h4><input type="text" name="nomeLanche"
                        placeholder="Digite o lanche" size="40">
                    <h4>Preço do lanche</h4><input type="text" name="precoLanche"
                        placeholder="Digite o preço" size="10">
                    <h4>Quantidade comprada</h4><input type="text" name="quantidade"
                        placeholder="Quantia" size="5"><br><br>
                    <input type="submit" name="enviar" value="Calcular Valor">
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