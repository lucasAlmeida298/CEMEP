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
        .php {
            font-family: "Ubuntu Sans", sans-serif;
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
            <td align="center" class="php">
                <?php
                $cliente = $_POST["cliente"];
                $idade = $_POST["idade"];
                $risco = $_POST["risco"];

                print ("Cliente: ". $cliente);
                print ("<br>Idade: ". $idade);
                if ($idade>=18 && $idade<25) {
                    if ($risco='b' || $risco='B') {
                        echo "<br>Grupo de Risco: Baixo";
                        echo "<br>Código do grupo de risco: 7";
                    }
                    else if ($risco='m' || $risco='M') {
                        echo "<br>Grupo de Risco: Médio";
                        echo "<br>Código do grupo de risco: 8";
                    }
                    else if ($risco='a' || $risco='A') {
                        echo "<br>Grupo de Risco: Alto";
                        echo "<br>Código do grupo de risco: 9";
                    }
                    else {
                        echo "<br>Dado inválido";
                    }
                }
                else if ($idade>=25 && $idade<41) {
                    if ($risco='b' || $risco='B') {
                        echo "<br>Grupo de Risco: Baixo";
                        echo "<br>Código do grupo de risco: 4";
                    }
                    else if ($risco='m' || $risco='M') {
                        echo "<br>Grupo de Risco: Médio";
                        echo "<br>Código do grupo de risco: 5";
                    }
                    else if ($risco='a' || $risco='A') {
                        echo "<br>Grupo de Risco: Alto";
                        echo "<br>Código do grupo de risco: 6";
                    }
                    else {
                        echo "<br>Dado inválido";
                    }
                }
                else if ($idade>=41 && $idade<71) {
                    if ($risco='b' || $risco='B') {
                        echo "<br>Grupo de Risco: Baixo";
                        echo "<br>Código do grupo de risco: 1";
                    }
                    else if ($risco='m' || $risco='M') {
                        echo "<br>Grupo de Risco: Médio";
                        echo "<br>Código do grupo de risco: 2";
                    }
                    else if ($risco='a' || $risco='A') {
                        echo "<br>Grupo de Risco: Alto";
                        echo "<br>Código do grupo de risco: 3";
                    }
                    else {
                        echo "<br>Dado inválido";
                    }
                }
                else {
                    echo "Idade imprópia pra tirar o seguro";
                }
                ?>
                

            </td>
        <tr>
            <td align="center">
                <h3>Desenvolvido por Lucas</h3>
            </td>
        </tr>
        </tr>
</body>

</html>