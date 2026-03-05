<?php 
/* O custo ao consumidor de um carro novo é a soma do custo de fábrica com
a porcentagem do distribuidor e dos impostos (aplicados ao custo de
fábrica). Supondo que a porcentagem do distribuidor seja de 28% e os
impostos de 45%, escrever um programa que leia o custo de fábrica de um
carro e exiba: o custo ao consumidor e o valor dos impostos.*/

//Declaração das variáveis e cálculos
$custoFabrica = "52000";
$imposto = $custoFabrica * 0.40;
$distribuidor = $custoFabrica * 0.28;
$custoTotal = $custoFabrica + $imposto + $distribuidor;

//Saída
print ("O custo de fabrica do carro é de: $custoFabrica");
print ("R$ <br>"); //coloquei alguns desse só pra aparecer o R$ no custo
print ("O valor da porcentagem do distribuidor é de: $distribuidor");
print ("R$ <br>");
print ("O valor da porcentagem de impostos é de: $imposto");
print ("R$ <br>");
print ("O custo do carro ao consumidor é de: $custoTotal");
print ("R$ <br>");

/*Faça um programa que receba o nome e o salário de um funcionário,
calcule o novo salário, e exiba: o salário, nome e novo salário sabendo-se
que este sofreu um aumento de 25%. Colocar tudo dentro de uma tabela
conforme exemplo acima. */

//Declaração das variáveis e cálculos
$nome = "Lucas";
$salario = 5000;
$aumentoSalario = $salario * 1.25;

//saída
print ("O nome do funcionário é: $nome <br>");
print ("O salário antigo do funcionário é: $salario");
print ("R$ <br>"); //coloquei alguns desse só pra aparecer o R$ no custo
print ("O novo salário do funcionário é: $aumentoSalario");
print ("R$ <br>");

/*Faça um programa que receba o peso de uma pessoa, calcule e exiba: o
peso dessa pessoa em gramas; se essa pessoa engordar 5% qual será seu
novo peso em gramas. Colocar tudo dentro de uma tabela conforme
exemplo acima. */

//Declaração das variáveis e cálculos
$peso = 80;
$pesoGramas = 80*1000;
$engordar = $pesoGramas * 1.05;

//saída
print ("O peso em gramas da pessoa é: $pesoGramas");
print ("g <br>"); //coloquei alguns desse só pra aparecer o g no peso
print ("Se ela engordar 5% de seu peso, em gramas terá: $engordar");
print ("g <br>");

/*Faça um programa que receba o ano de nascimento de uma pessoa e o
ano atual. Calcule e exiba a idade dessa pessoa. Colocar tudo dentro de
uma tabela conforme exemplo acima. */

//Declaração das variáveis e cálculos
$anoNascimento = 2009;
$anoAtual = 2026;
$idade = $anoAtual - $anoNascimento;

//saída
print ("A idade da pessoa é: $idade");
print (" anos <br>"); //coloquei esse só pra aparecer o anos na idade

?>