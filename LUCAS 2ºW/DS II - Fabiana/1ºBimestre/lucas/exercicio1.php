<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <h2>Aula DS - 23/02/2026</h2>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h4>
                    <?php
                    $custoFabrica = 52000;
                    $imposto = $custoFabrica * 0.40;
                    $distribuidor = $custoFabrica * 0.28;
                    $custoTotal = $custoFabrica + $imposto + $distribuidor;

                    //Saída
                    print("O custo de fabrica do carro é de: $custoFabrica");
                    print("R$ <br>"); //coloquei alguns desse só pra aparecer o R$ no custo
                    print("O valor da porcentagem do distribuidor é de: $distribuidor");
                    print("R$ <br>");
                    print("O valor da porcentagem de impostos é de: $imposto");
                    print("R$ <br>");
                    print("O custo do carro ao consumidor é de: $custoTotal");
                    print("R$ <br>");
                    ?>
                </h4>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>programa desenvolvido por Lucas</h3>
            </td>
        </tr>

    </table>
</body>

</html>