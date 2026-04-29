<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    <style>
        h1, h3, h4 {
            font-family: "Ubuntu Sans", sans-serif;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h1>Exercício 1</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Paulínia, 27 de Abril de 2026</h3>
            </td>
        </tr>
        <tr>
            <td>
                <form action="recebeDados1.php" method="post">
                    <h4>Calculadora: <br>
                        (1) Soma <br>
                        (2) Subtração <br>
                        (3) Divisão <br>
                        (4) Multiplicação </h4>
                    <h4>Escolha a operação: </h4><input type="text" name="operacao"
                        placeholder="Digite a operação desejada" size="20">
                    <h4>Primeiro valor: <input type="text" name="n1" size="10"
                    placeholder="Digite o 1º valor"></h4>
                    <h4>Segundo valor: <input type="text" name="n2" size="10"
                    placeholder="Digite o 2º valor"></h4>
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