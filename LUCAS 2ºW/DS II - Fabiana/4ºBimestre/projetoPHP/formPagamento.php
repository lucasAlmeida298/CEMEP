<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pagamento</title>
</head>

<body>
    <table align="center" border="1" widht="50%">
        <tr>
            <td align="center">
                <h1>Cadastro de Pagamento</h1>
            </td>
        </tr>
        <tr>
            <td>
                <form>
                    <h4>Funcionário: <input type="text" name="funcionario" size="60"
                            placeholder="Digite o nome do funcionário"></h4>
                    <h4>Valor do salário mínimo: <input type="text" name="valorSalMin" size="25" placeholder="Ex: 2500" </h4>
                    <h4>Número de horas trabalhadas: <input type="text" name="numHoraTrab" size="10"
                            placeholder="Ex: 120" </h4>
                    <h4>Número de dependentes: <input type="text" name="numDependentes" size="10" placeholder="Ex: 4"></h4>
                    <h4>Número de horas extras trabalhadas: <input type="text" name="numHorasExtras"
                            placeholder="Ex: 12"></h4>
                    <input type="submit" value="Enviar dados"

                </form>


            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>
                    <?php
                    include "funcaoHora.php";
                    horaAtual();
                    ?>
                </h3>
            </td>
        </tr>