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
                $chipInternacional = $_POST["chipInternacional"];

                print("Nome: " . $nome . "<br>");
                print("Idade: " . $idade . "<br>");
                print("Email: " . $email . "<br>");
                print("País: " . $pais . "<br>");
                print("Tempo de permanência: " . $tempo . " meses<br>");
                print("Tipo de hopedagem: " . $hospedagem . "<br>");
                print("Tipo de alimentação: " . $alimentacao . "<br>");
                print("Serviços escolhidos (de acordo com o sim ou não): $seguroViagem, $ingles, $passeioTuristico, $transporte, $chipInternacional <br>");

                $valorPais = 0;

                if ($pais == "EU") {
                    $valorPais = 5200 * $tempo;
                } else if ($pais == "CA") {
                    $valorPais = 4500 * $tempo;
                } else if ($pais == "IG") {
                    $valorPais = 5800 * $tempo;
                } else if ($pais == "AU") {
                    $valorPais = 6000 * $tempo;
                } else {
                    print("valor inválido, tente novamente!");
                }

                $valorHospedagem = 0;

                if ($hospedagem == "casaFamilia") {
                    $valorHospedagem = 1200 * $tempo;
                } else if ($hospedagem == "dormitorioEstudantil") {
                    $valorHospedagem = 900 * $tempo;
                } else if ($hospedagem == "apartamentoCompartilhado") {
                    $valorHospedagem = 1600 * $tempo;
                } else {
                    print("valor inválido, tente novamente!");
                }

                $valorAlimentacao = 0;

                if ($alimentacao == "semAlimentacao") {
                    $valorAlimentacao = 0 * $tempo;
                } else if ($alimentacao == "cafeDaManha") {
                    $valorAlimentacao = 300 * $tempo;
                } else if ($alimentacao == "meiaPensao") {
                    $valorAlimentacao = 700 * $tempo;
                } else if ($alimentacao == "pensaoCompleta") {
                    $valorAlimentacao = 1200 * $tempo;
                } else {
                    print("valor inválido, tente novamente!");
                }

                $contServicos = 0;

                if ($seguroViagem == "sim") {
                    $valorHospedagemTotal = 800 + $contServicos;
                } if ($ingles == "sim") {
                    $valorHospedagemTotal = 1500 + $contServicos;
                } if ($passeioTuristico == "sim") {
                    $valorHospedagemTotal = 600 + $contServicos;
                } if ($transporte == "sim") {
                    $valorHospedagemTotal = 250 + $contServicos;
                } if ($chipInternacional == "sim") {
                    $valorHospedagemTotal = 120 + $contServicos;
                }

                $valorHospedagemFinal = $valorPais + $valorHospedagem + $valorAlimentacao + $valorHospedagemTotal;

                if ($tempo >= 12) {
                    $valorDesconto = $valorHospedagemFinal - ($valorHospedagemFinal * 5) / 100;
                    print("Você ganhou um desconto de 5%! Seu valor atual é de: R$ $valorDesconto <br>");
                } else if ($tempo > 6) {
                    $valorDesconto = $valorHospedagemFinal - ($valorHospedagemFinal * 10) / 100;
                    print("Você ganhou um desconto de 10%! Seu valor atual é de: R$ $valorDesconto <br>");
                }






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