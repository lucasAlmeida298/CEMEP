<?php
/* Faça um programa em PHP que receba o salário de um
funcionário e o nome do mesmo. Calcule o salário reajustado
+ 30% e o valor do imposto de renda a ser pago 5% dp salário
reajustado. Exibir: o nome do funcionário, salário, salário
reajustado e o valor do imposto de renda */


//declaração de variáveis
$nome = "Lucas";
$salario = "3000";
$salarioReajustado = $salario*1.3;
$imposto = $salarioReajustado*0.05;

//saída
print ("O nome do funcionário é: $nome <br>");
print ("O salário do " .$nome. " é: $salario <br>");
print ("O salário reajustado do " .$nome. " é: $salarioReajustado <br>");
print ("O valor do imposto do " .$nome. " é: $imposto");




?>