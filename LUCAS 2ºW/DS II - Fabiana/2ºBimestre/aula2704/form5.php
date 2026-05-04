<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguros</title>
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
                <h1>Exercício 5</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Paulínia, 27 de Abril de 2026</h3>
            </td>
        </tr>
        <tr>
            <td>
                <form action="recebeDados5.php" method="post">
                    <h4>Cliente: </h4><input type="text" name="cliente"
                        placeholder="Digite o nome completo" size="40">
                    <h4>Idade: <input type="text" name="idade" size="10"
                            placeholder="Digite sua idade"></h4>
                    <h4>Grupo de risco (B/M/A): <input type="text" name="risco" size="10"
                            placeholder="Digite B, M ou A"></h4>
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