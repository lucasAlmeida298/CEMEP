<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionário</title>
</head>

<body>
    <table align="center" border="1" widht="50%s">
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
                                <option value="ac">Acre</option>
                                <option value="al">Alagoas</option>
                                <option value="ap">Amapá</option>
                                <option value="am">Amazonas</option>
                                <option value="ba">Bahia</option>
                                <option value="ce">Ceará</option>
                                <option value="df">Distrito Federal</option>
                                <option value="es">Espírito Santo</option>
                                <option value="go">Goiás</option>
                                <option value="ma">Maranhão</option>
                                <option value="mt">Mato Grosso</option>
                                <option value="ms">Mato Grosso do Sul</option>
                                <option value="mg">Minas Gerais</option>
                                <option value="pa">Pará</option>
                                <option value="pb">Paraíba</option>
                                <option value="pr">Paraná</option>
                                <option value="pe">Pernambuco</option>
                                <option value="pi">Piauí</option>
                                <option value="rj">Rio de Janeiro</option>
                                <option value="rn">Rio Grande do Norte</option>
                                <option value="rs">Rio Grande do Sul</option>
                                <option value="ro">Rondônia</option>
                                <option value="rr">Roraima</option>
                                <option value="sc">Santa Catarina</option>
                                <option value="sp">São Paulo</option>
                                <option value="se">Sergipe</option>
                                <option value="to">Tocantins</option>
                            </select></h4>
                        <h4>Telefone: <input type="text" name="telefone" size="20" placeholder="Ex: (01) 12345-7890"></h4>
                        <h4>E-mail: <input type="text" name="email" size="60" placeholder="Ex: meumelhoremail@gmail.com"></h4>
                        <h4>Cargo: <input type="text" name="cargo" size="20" placeholder="Ex: Gerente, desenvolvedor... ETC"></h4>
                        <h4>Data de Admissão: <input type="text" name="dataAdmissao" size="15" placeholder="Ex: 01/01/2001"></h4>
                        <input type="submit" value="Enviar cadastro">
                </form>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php
                include "funcaoHora.php";
                horaAtual();
                ?>
            </td>
        </tr>
    </table>
</body>
</html>