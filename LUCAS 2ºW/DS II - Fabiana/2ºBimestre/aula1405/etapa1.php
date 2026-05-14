<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h2>Cadastro - Etapa 1/3</h2>
                <h1>SPA - Bem estar do cliente</h1>
            </td>
        </tr>
        <tr>
            <td>
                <form>
                    <h4>Cliente: <input type="text" name="cliente" size="50" placeholder="Digite seu nome completo"></h4>
                    <h4>CPF: <input type="text" name="cpf" size="15" placeholder="123.456.789-00"></h4>
                    <h4>RG: <input type="text" name="rg" size="15" placeholder="12.345.678-9"></h4>
                    <h4>Sexo: <input type="radio" name="sexo" value="masculino"> masculino<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="sexo" value="feminino"> feminino
                    </h4>
                    <h4>Data de nascimento: <input type="text" name="dataNascimento" size="10" placeholder="xx/yy/zzzz"></h4>
                    <h4>Endereço: <input type="text" name="endereco" size="50" placeholder="Ex: Rua das Flores, nº 100 - Bairro Jardim Paulista"></h4>
                    <h4>Cidade: <input type="text" name="cidade" size="25" placeholder="Digite a cidade em que você mora"></h4>
                    <h4>Estado: <select name="Estado">
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
                        </select> </h4>
                    <h4>CEP: <input type="text" name="cep" size="10" placeholder="12345-678"></h4>
                    <h4>Telefone: <input type="text" name="fone" size="15" placeholder="(00) 12345-6789"></h4>
                    <h4>Email: <input type="text" name="email" size="50" placeholder="seumelhoremail@gmail.com"</h4>
            </td>
        </tr>
    </table>
</body>

</html>