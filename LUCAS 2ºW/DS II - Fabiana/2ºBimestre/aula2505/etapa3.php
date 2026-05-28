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
                <h1 align="center">Intercâmbio Estudantil - Etapa 3/3</h1>
            </td>
        </tr>
        <tr>
            <td>
                <form action="cadastra.php" method="post">
                    <input type="hidden" name="nome" value="<?php print $_POST["nome"]; ?>">
                    <input type="hidden" name="idade" value="<?php print $_POST["idade"]; ?>">
                    <input type="hidden" name="email" value="<?php print $_POST["email"]; ?>">
                    <input type="hidden" name="pais" value="<?php print $_POST["pais"]; ?>">
                    <input type="hidden" name="tempo" value="<?php print $_POST["tempo"]; ?>">
                    <input type="hidden" name="hospedagem" value="<?php print $_POST["hospedagem"]; ?>">
                    <input type="hidden" name="alimentacao" value="<?php print $_POST["alimentacao"]; ?>">


                    <h4>Seguro Viagem:</h4>
                    <h4><input type="radio" name="seguroViagem" value="sim">Sim</h4>
                    <h4><input type="radio" name="seguroViagem" value="nao">Não</h4>

                    <h4>Curso de Inglês Intensivo:</h4>
                    <h4><input type="radio" name="ingles" value="sim">Sim</h4>
                    <h4><input type="radio" name="ingles" value="nao">Não</h4>

                    <h4>Passeio Turístico:</h4>
                    <h4><input type="radio" name="passeioTuristico" value="sim">Sim</h4>
                    <h4><input type="radio" name="passeioTuristico" value="nao">Não</h4>

                    <h4>Transporte Aeroporto/Hotel:</h4>
                    <h4><input type="radio" name="transporte" value="sim">Sim</h4>
                    <h4><input type="radio" name="transporte" value="nao">Não</h4>

                    <h4>Chip Internacional:</h4>
                    <h4><input type="radio" name="chipInternacional" value="sim">Sim</h4>
                    <h4><input type="radio" name="chipInternacional" value="nao">Não</h4>

                    <input type="submit" name="enviar" value="Finalizar Cadastro">
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