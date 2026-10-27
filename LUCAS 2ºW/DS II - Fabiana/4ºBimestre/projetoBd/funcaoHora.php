<?php
function horaAtual() {
date_default_timezone_set('America/Sao_Paulo');
$hora = date("H:i:s");
print("Desenvolvido por Lucas <br>");
print ("Hora: $hora");
}
?>