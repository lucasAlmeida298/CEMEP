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
                <h1 align="center">Intercâmbio Estudantil</h1>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="nome" value="<?php print $_POST["nome"]; ?>">
                    <input type="hidden" name="idade" value="<?php print $_POST["idade"]; ?>">
                    <input type="hidden" name="email" value="<?php print $_POST["email"]; ?>">
                    <input type="hidden" name="pais" value="<?php print $_POST["pais"]; ?>">
                    <input type="hidden" name="tempo" value="<?php print $_POST["tempo"]; ?>">
                    <input type="hidden" name="hospedagem" value="<?php print $_POST["hospedagem"]; ?>">
                    <input type="hidden" name="alimentacao" value="<?php print $_POST["alimentacao"]; ?>">


                <?php 
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];
                $email = $_POST["email"];
                $pais = $_POST["pais"];
                $tempo = $_POST["tempo"];
                $hospedagem = $_POST["hospedagem"];
                $alimentacao = $_POST["alimentacao"];
                $seguroViagem = $_POST["seguroViagem"];
                $ingles = $_POST["ingles"];
                $passeioTuristico = $_POST["passeioTuristico"];
                $transporte = $_POST["transporte"];
                $chipInternacional = $_POST["chipeInternacional"];
                
                print ("Nome: ". $nome ."<br>");
                print ("Idade: ". $idade ."<br>");
                print ("Email: ". $email ."<br>");
                print ("País: ". $pais ."<br>");
                print ("Tempo de permanência: ". $tempo ." meses<br>");
                print ("Tipo de hopedagem: ". $hospedagem ."<br>");
                print ("Tipo de alimentação: ". $alimentacao ."<br>");
                print ("Serviços escolhidos: ". $seguroViagem. $ingles. $passeioTuristico. $transporte. $chipInternacional ."<br>");
                
                
                
                
                
                
                
                ?>
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