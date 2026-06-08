<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="50%" align="center">
        <tr>
            <td align="center"><h1>Data e hora do Sistema</h1></td>
        </tr>
        <tr>
            <td align="center">
                <?php 
                date_default_timezone_set('America/Sao_Paulo');
                print("Data: ");
                print date ("d/M/y");
                $diaSemana = date("W");
                print("<br>Dia da semana em número: $diaSemana");
                $diaAno = date("z");
                print("<br>Estamos no dia $diaAno do ano");
                print("<br>Mês: ");
                print date("m");
                print("<br>Hora: ");
                print date("h:i:s a");
                print("<br>Hora: ");
                print date("H:i:s");
                print "<br />";
                $dia = date("d");
                $mes = date("m");
                $ano = date("Y");
                $semana = date("W");

                if($mes == "01"){
                    $mes2 = "Janeiro";
                } else if($mes == "02"){
                    $mes2 = "Feveiro";
                } else if($mes == "03"){
                    $mes2 = "Março";
                } else if($mes == "04"){
                    $mes2 = "Abril";
                } else if($mes == "05"){
                    $mes2 = "Maio";
                } else if($mes == "06"){
                    $mes2 = "Junho";
                } else if($mes == "07"){
                    $mes2 = "Julho";
                } else if($mes == "08"){
                    $mes2 = "Agosto";
                } else if($mes == "09"){
                    $mes2 = "Setembro";
                } else if($mes == "10"){
                    $mes2 = "Outubro";
                } else if($mes == "11"){
                    $mes2 = "Novembro";
                } else {
                    $mes2 = "Dezembro";
                }

            print "<br />";
            if($semana == "0"){
                $semana2 = ("Domingo");
            }
            else if($semana == "1"){
                $semana2 = ("Segunda Feira");
            }
            else if($semana == "2"){
                $semana2 = ("Terça Feira");
            }
            else if($semana == "3"){
                $semana2 = ("Quarta Feira");
            }
            else if($semana == "4"){
                $semana2 = ("Quinta Feira");
            }
            else if($semana == "5"){
                $semana2 = ("Sexta Feira");
            }
            else{
                $semana2 = ("Domingo");
            }
            ?>
            </td>
        </tr>
    </table>
</body>
</html>