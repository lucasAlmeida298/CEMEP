<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
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
                    <input type="hidden" name="nome" value="<?php print $_POST["nome"]; ?>">
                    <input type="hidden" name="nota1" value="<?php print $_POST["nota1"]; ?>">
                    <input type="hidden" name="nota2" value="<?php print $_POST["nota2"]; ?>">
                </form>
                <?php
                $nome = $_POST["nome"];
                $nota1 = $_POST["nota1"];
                $nota2 = $_POST["nota2"];

                function exibirDados($nome, $nota1, $nota2)
                {
                    print("Nome: $nome");
                    print("<br>Nota 1: $nota1");
                    print("<br>Nota 2: $nota2");
                }

                function calcularMedia($nota1, $nota2)
                {
                    $media = ($nota1 + $nota2) / 2;
                    print("<br>Média: $media");
                    if ($media >= 6 && $media <= 10) {
                        echo "<br>Aprovado";
                    } else if ($media < 6 && $media >= 0) {
                        echo "<br>Reprovado";
                    } else {
                        echo "<br>Média inválida";
                    }
                }

                exibirDados($nome, $nota1, $nota2);
                calcularMedia($nota1, $nota2);





                ?>
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