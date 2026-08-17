<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" align="Center" width="50%">
        <tr>
            <td>
                <h1 align="center">Cadastro de Alunos</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php
                include "funcaoData.php";
                dataAtual();
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <form action="recebeDados.php" method="post">
                    <h4>Nome: <input type="text" name="nome" size="40" placeholder="Digite seu nome"></h4>
                    <h4>Nota 1: <input type="text" name="nota1" size="10" placeholder="Digite sua nota"></h4>
                    <h4>Nota 2: <input type="text" name="nota2" size="10" placeholder="Digite sua nota"></h4>
                    <input type="submit" name="enviar" value="Próximo passo">
                </form>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>
                    <?php
                    include "funcaoHora.php";
                    horaAtual();
                    ?>
                </h3>
            </td>
        </tr>
    </table>
</body>

</html>