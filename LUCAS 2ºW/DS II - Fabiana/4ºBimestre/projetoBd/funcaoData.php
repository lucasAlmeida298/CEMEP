<?php
function dataAtual()
{
date_default_timezone_set('America/Sao_Paulo');
$dia = date("d");
$mes = date("m");
$ano = date("Y");
$semana = date("w");

if ($mes == "01")
    $mesExtenso = "Janeiro";
else if ($mes == "02")
    $mesExtenso = "Fevereiro";
else if ($mes == "03")
    $mesExtenso = "Março";
else if ($mes == "04")
    $mesExtenso = "Abril";
else if ($mes == "05")
    $mesExtenso = "Maio";
else if ($mes == "06")
    $mesExtenso = "Junho";
else if ($mes == "07")
    $mesExtenso = "Julho";
else if ($mes == "08")
    $mesExtenso = "Agosto";
else if ($mes == "09")
    $mesExtenso = "Setembro";
else if ($mes == "10")
    $mesExtenso = "Outubro";
else if ($mes == "11")
    $mesExtenso = "Novembro";
else
    $mesExtenso = "Dezembro";

if ($semana == "0")
    $semana = "Domingo";
else if ($semana == "1")
    $semana = "Segunda Feira";
else if ($semana == "2")
    $semana = "Terça Feira";
else if ($semana == "3")
    $semana = "Quarta Feira";
else if ($semana == "4")
    $semana = "Quinta Feira";
else if ($semana == "5")
    $semana = "Sexta Feira";
else
    $semana = "Sábado";

//print("Paulínia, ". $semana . ",  ". $dia ." de ". $mesExtenso ." de ". $ano);
print("Paulínia, $dia de $mesExtenso de $ano – $semana");
}
?>