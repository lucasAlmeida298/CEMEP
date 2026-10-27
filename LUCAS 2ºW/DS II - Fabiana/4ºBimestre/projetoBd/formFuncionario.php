<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionário</title>
</head>

<body>
    <table align="center" border="1" width="50%">
        <tr>
            <td align="center">
                <h1>Cadastro de Funcionário</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>
                    <?php
                    include "funcaoData.php";
                    dataAtual();
                    ?>
                </h3>
            </td>
        </tr>
        <tr>
            <td>
                <form action="inserirFuncionario.php" method="post">
                    <h4>Nome: <input type="text" name="nome" size="60" placeholder="Digite seu nome"></h4>
                    <h4>CPF: <input type="text" name="cpf" size="30" placeholder="Ex: 123.456.789-01"></h4>
                    <h4>Endereço: <input type="text" name="endereco" size="60" placeholder="Ex: Avenida da Alegria, Monte Alegre, 123"></h4>
                    <h4>Cidade: <input type="text" name="cidade" size="30" placeholder="Ex: Paulínia"></h4>
                    <h4>Estado: <select name="estado">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select></h4>
                    <h4>Telefone: <input type="text" name="telefone" size="20" placeholder="Ex: (01) 12345-7890"></h4>
                    <h4>E-mail: <input type="text" name="email" size="60" placeholder="Ex: meumelhoremail@gmail.com"></h4>
                    <h4>Cargo: <input type="text" name="cargo" size="20" placeholder="Ex: Gerente, desenvolvedor... ETC"></h4>
                    <h4>Data de Admissão: <input type="text" value="<?php echo date('d/m/Y'); ?>" size="15" readonly></h4>
                    <input type="submit" value="Enviar cadastro">
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
    </table>
</body>

</html>