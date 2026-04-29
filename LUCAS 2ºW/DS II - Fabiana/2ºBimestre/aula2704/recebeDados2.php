<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
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
                <h1>Exercício 2</h1>
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
                $nome = $_POST["nome"];
                $peso = $_POST["peso"];
                $altura = $_POST["altura"];

                print ("Nome: ". $nome);
                print ("<br>Peso: ". $peso ."KG");
                print ("<br>Altura: ". $altura);
                $imc = $peso/($altura*$altura);
                print ("<br>IMC: ". $imc ."<br>");
                
                if ($imc<20) {
                    echo "Faixa de risco: Abaixo do peso";
                }
                elseif ($imc>=20 && $imc<=25) {
                    echo "Faixa de risco: Normal";
                }
                elseif ($imc>25 && $imc<=30) {
                    echo "Faixa de risco: Excesso de peso";
                }
                elseif ($imc>30 && $imc<=35) {
                    echo "Faixa de risco: Obesidade";
                }
                elseif ($imc>35) {
                    echo "Faixa de risco: Obesidade mórbida";
                }
                else {
                    echo "Dado ínvalido";
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