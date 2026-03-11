<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 
    <title>Formulário</title>
    <style>
        input {
            margin-top: 0.5px;
        }

        h4 {
            font-family: "Montserrat";
            margin-bottom: 0.8px;
        }
        h1, h2, h3, placeholder {
            font-family: "Montserrat";
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
                <h2>Aula 09/03/2026</h2>
            </td>
        </tr>
        <tr>
            <td align="left">
                <form action="recebeDados.php" method="post">
                    <h4>Nome do funcionário</h4><input type="text" name="nomeFuncionario"
                        placeholder="Digite seu nome aqui" size="70"><br><br>
                    <h4>Cargo</h4><input type="text" name="cargo"
                        placeholder="Digite seu cargo na empresa" size="60"><br><br>
                    <h4>Salário</h4><input type="text" name="salario"
                        placeholder="Digite seu salário" size="15"><br><br>
                    <input type="submit" name="enviar" value="Enviar Dados">
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