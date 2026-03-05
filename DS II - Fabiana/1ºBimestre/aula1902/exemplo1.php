<?php 
/*Faça um programa que efetue a venda
de um produto. O programa deve receber
o nome do produto, valor unitário e 
quantidade vendida
Calcule:
-Total a pagar
-Total a pagar com desconto de 10%
-Total a pagar com desconto de 10%
Exibir:
-Nome do produto
-Valor unitário
-Quantidade vendida
-Total a pagar
-Total a pagar com desconto
-Total a pagar com juros*/


//Declaração de variáveis
$nome = "camiseta";
$valorUnitario = 60; // declaração valor da unidade 
$quantidade = 5;

//Cálculos
$valorTotal = $valorUnitario*$quantidade;
$desconto = $valorTotal*0.10;
$valorDesconto = $valorTotal-$desconto;
$juro = $valorTotal*0.10;
$valorJuro = $valorTotal+$juro;

//Saída
print ("O nome do produto é: $nome <br>");
print ("A quantidade de " .$nome. "s vendidas foram $quantidade <br>");
print ("O total a pagar foi $valorTotal <br>");
print ("O total a pagar com desconto foi $valorDesconto <br>");
print ("O total a pagar com juros foi $valorJuro <br>");

//Fim do script PHP
?>