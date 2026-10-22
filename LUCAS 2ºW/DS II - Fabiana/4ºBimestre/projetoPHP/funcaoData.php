<?php
function dataAtual()
{
date_default_timezone_set('America/Sao_Paulo');
$dia = date("d");
$mes = date("m");
$ano = date("Y");
$semana = date("w");

if ($mes == "01")
    $mesExtenso = "janeiro";
else if ($mes == "02")
    $mesExtenso = "fevereiro";
else if ($mes == "03")
    $mesExtenso = "Março";
else if ($mes == "04")
    $mesExtenso = "abril";
else if ($mes == "05")
    $mesExtenso = "maio";
else if ($mes == "06")
    $mesExtenso = "junho";
else if ($mes == "07")
    $mesExtenso = "julho";
else if ($mes == "08")
    $mesExtenso = "agosto";
else if ($mes == "09")
    $mesExtenso = "setembro";
else if ($mes == "10")
    $mesExtenso = "outubro";
else if ($mes == "11")
    $mesExtenso = "novembro";
else
    $mesExtenso = "dezembro";

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

print("Paulínia, ". $semana . ",  ". $dia ." de ". $mesExtenso ." de ". $ano);
}
?>