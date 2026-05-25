<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intercâmbio estudantil
    </title>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td>
                <h1 align="center">Intercâmbio Estudantil - 25/05/2026</h1>
            </td>
        </tr>
        <tr>
            <td>
                <form action="etapa2.php" method="post">
                <h4>Nome completo:<input type="text" size="50" name="nome" placeholder="Digite seu nome completo"></h4>
                <h4>Idade: <input type="text" name="idade" size="3" placeholder="Ex:31"></h4>
                <h4>E-mail: <input type="text" name="email" size="80" placeholder="seumelhoremail@gmail.com"></h4>
                <h4>País desejado para intercâmbio: </h4><h4><input type="radio" name="pais" value="CA">Canadá</h4>
                <h4><input type="radio" name="pais" value="EU">Estados Unidos</h4>
                <h4><input type="radio" name="pais" value="IG">Inglaterra</h4>
                <h4><input type="radio" name="pais" value="AU">Austrália</h4>
                <h4>Tempo de permanência em meses: <input type="text" name="tempo" size="5" placeholder="Ex:36 (3 anos)"></h4>
                <input type="submit" name="enviar" value="Próximo passo">
                <br><br>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <h3 align="center">Desenvolvido por Lucas</h3>
            </td>
        </tr>
    </table>
</body>

</html>