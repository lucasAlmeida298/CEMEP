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
        h1, h3, h4 {
            font-family: "Ubuntu Sans", sans-serif;
        }
        .fundo {
            background-color: #4384daff;
            color: white;
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
            <td>
                <table align="center" width="40%">
                    <tr class="fundo">
                        <td align="center"><h4>IMC</h4></td>
                        <td align="center"><h4>Faixa de risco</h4></td>
                    </tr>
                    <tr>
                        <td align="center"><h4>Abaixo de 20</h4></td>
                        <td align="center"><h4>Abaixo do peso</h4></td>
                    </tr>
                    <tr>
                        <td align="center"><h4>A partir de 20 até 25</h4></td>
                        <td align="center"><h4>Normal</h4></td>
                    </tr>
                    <tr>
                        <td align="center"><h4>Acima de 25 até 30</h4></td>
                        <td align="center"><h4>Excesso de peso</h4></td>
                    </tr>
                    <tr>
                        <td align="center"><h4>Acima de 30 até 35</h4></td>
                        <td align="center"><h4>Obesidade</h4></td>
                    </tr>
                    <tr>
                        <td align="center"><h4>Acima de 35</h4></td>
                        <td align="center"><h4>Obesidade mórbida</h4></td>
                    </tr>

                </table>
            </td>
        </tr>
        <tr>
            <td>
                <form action="recebeDados2.php" method="post">
                    <h4>Nome do paciente: </h4><input type="text" name="nome"
                        placeholder="Digite o nome completo" size="40">
                    <h4>Peso: <input type="text" name="peso" size="10"
                    placeholder="Digite seu peso"></h4>
                    <h4>Altura: <input type="text" name="altura" size="10"
                    placeholder="Digite sua altura"></h4>
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