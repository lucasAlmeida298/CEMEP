<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora calorias</title>
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
                <h1>Exercício 3</h1>
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
                $prato = $_POST["prato"];
                $sobremesa = $_POST["sobremesa"];
                $bebida = $_POST["bebida"];
                $calorias=0;

                if ($prato==1) {
                    echo "Seu prato é vegetariano!";
                    $calorias=$calorias+180;
                }
                elseif ($prato==2) {
                    echo "Seu prato é Peixe!";
                    $calorias=$calorias+230;
                }
                elseif ($prato==3) {
                    echo "Seu prato é Frango!";
                    $calorias=$calorias+250;
                }
                elseif ($prato==4) {
                    echo "Seu prato é Carne!";
                    $calorias=$calorias+350;
                }
                else {
                    echo "Prato escolhido inválido";
                }

                if ($sobremesa==1) {
                    echo "<br>Sua sobremesa é abacaxi!";
                    $calorias=$calorias+75;
                }
                elseif ($sobremesa==2) {
                    echo "<br>Sua sobremesa é sorvete diet!";
                    $calorias=$calorias+110;
                }
                elseif ($sobremesa==3) {
                    echo "<br>Sua sobremesa é mousse diet!";
                    $calorias=$calorias+170;
                }
                elseif ($sobremesa==4) {
                    echo "<br>Sua sobremesa é mousse chocolate!";
                    $calorias=$calorias+200;
                }
                else {
                    echo "<br>sobremesa escolhida inválida";
                }

                if ($bebida==1) {
                    echo "<br>Sua bebida é chá!";
                    $calorias=$calorias+20;
                }
                elseif ($bebida==2) {
                    echo "<br>Sua bebida é suco de laranja!";
                    $calorias=$calorias+70;
                }
                elseif ($bebida==3) {
                    echo "<br>Sua bebida é suco de limão!";
                    $calorias=$calorias+100;
                }
                elseif ($bebida==4) {
                    echo "<br>Sua bebida é refrigerante!";
                    $calorias=$calorias+65;
                }
                else {
                    echo "<br>bebida escolhida inválida";
                }
                print("<br>Total de calorias: ". $calorias ."kcal");
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