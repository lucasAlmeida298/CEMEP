<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
</head>

<style>
    body {
        background-color: #f3eee8ff;
    }

    .fonte {
        font-family: "League Spartan", sans-serif;
    }
</style>

<body>
    <table border="1" width="50%" align="center" class="fonte">
        <tr>
            <td align="center">
                <h2>Data e Hora</h2>
            </td>
        </tr>
        <tr>
            <td align="center"><?php
                                //Declaração mês, datas por extenso e importações de data
                                date_default_timezone_set('America/Sao_Paulo');
                                $mes = date("m");
                                $semana = date("w");
                                $hora = date("H");
                                $ano = date("Y");
                                $dia = date("d");

                                if ($mes == "01") {
                                    $mesExtenso = "Janeiro";
                                } else if ($mes == "02") {
                                    $mesExtenso = "Feveiro";
                                } else if ($mes == "03") {
                                    $mesExtenso = "Março";
                                } else if ($mes == "04") {
                                    $mesExtenso = "Abril";
                                } else if ($mes == "05") {
                                    $mesExtenso = "Maio";
                                } else if ($mes == "06") {
                                    $mesExtenso = "Junho";
                                } else if ($mes == "07") {
                                    $mesExtenso = "Julho";
                                } else if ($mes == "08") {
                                    $mesExtenso = "Agosto";
                                } else if ($mes == "09") {
                                    $mesExtenso = "Setembro";
                                } else if ($mes == "10") {
                                    $mesExtenso = "Outubro";
                                } else if ($mes == "11") {
                                    $mesExtenso = "Novembro";
                                } else {
                                    $mesExtenso = "Dezembro";
                                }

                                if ($semana == "0") {
                                    $semanaExtenso = ("Domingo");
                                } else if ($semana == "1") {
                                    $semanaExtenso = ("Segunda Feira");
                                } else if ($semana == "2") {
                                    $semanaExtenso = ("Terça Feira");
                                } else if ($semana == "3") {
                                    $semanaExtenso = ("Quarta Feira");
                                } else if ($semana == "4") {
                                    $semanaExtenso = ("Quinta Feira");
                                } else if ($semana == "5") {
                                    $semanaExtenso = ("Sexta Feira");
                                } else {
                                    $semanaExtenso = ("Sábado");
                                }


                                //Saída
                                echo "Dia do mês: ";
                                print date("d");
                                print("<br>Mês atual: " . $mesExtenso . "/" . $mes);
                                print("<br>Dia da semana: " . $semanaExtenso . "/" . $semana);
                                print("<br>Hora: ");
                                print date("H:i:s");

                                if ($hora <= 11) {
                                    echo "<br><br>Bom Dia!";
                                } else if ($hora <= 17) {
                                    echo "<br>Boa Tarde!";
                                } else {
                                    echo "<br>Boa Noite!";
                                }

                                if ($semana < 0) {
                                    echo "<br>Hoje é domingo! :|";
                                } else if ($semana > 5) {
                                    echo "<br>Hoje é sábado! :)";
                                } else {
                                    echo "<br>Hoje é um dia útil! :(";
                                }

                                if ($mes > 0 && $mes < 4) {
                                    echo "<br>Estamos no 1º trimestre do ano";
                                } else if ($mes >= 4 && $mes < 7) {
                                    echo "<br>Estamos no 2º trimestre do ano";
                                } else if ($mes >= 7 && $mes < 10) {
                                    echo "<br>Estamos no 3º trimestre do ano";
                                } else {
                                    echo "<br>Estamos no 4º trimestre do ano";
                                }

                                print("<br><br>Paulínia, " . $dia . " de " . $mesExtenso . " de " . $ano);

                                ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>desenvolvido por Lucas</h3>
            </td>
        </tr>
    </table>

</body>

</html>