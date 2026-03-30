<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100..900&display=swap" rel="stylesheet">
    <title>Notas</title>
    <style>
        body {
            background-color: #f5f1e5;

        }

        h3 {
            font-family: "Encode Sans", sans-serif;
            font-size: larger;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .php {
            font-family: "Encode Sans", sans-serif;
            font-size: larger;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h3>Exercício 3 Aula - 26/03/2026</h3>
            </td>
        </tr>
        <tr>
            <td class="php">
                <?php
                $nome = $_POST["nome"];
                $notaLab = $_POST["notaLab"];
                $notaAv = $_POST["notaAv"];
                $notaEx = $_POST["notaEx"];

                print("Estudante " . $nome . "<br>");
                print("Nota laboratório: " . $notaLab . "<br>");
                print("Nota avaliação semestral: " . $notaAv . "<br>");
                print("Nota exame final: " . $notaEx . "<br>");

                $media = (($notaLab*2)+($notaAv*3)+($notaEx*5))/10;

                print("Média final: " . $media . "<br>");

                if ($media >= 8 && $media<=10) {
                    echo "Conceito A";
                } else if ($media >= 7 && $media<8) {
                    echo "Conceito B";
                } else if ($media >= 6 && $media<7) {
                    echo "Conceito C";
                } else if ($media >= 5 && $media<6) {
                    echo "Conceito D";
                } else if ($media >= 0 && $media<5) {
                    echo "Conceito E";
                } else {
                    echo "Média inválida";
                }
                ?>

            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Programa desenvolvido por Lucas</h3>
            </td>
        </tr>
    </table>
</body>

</html>