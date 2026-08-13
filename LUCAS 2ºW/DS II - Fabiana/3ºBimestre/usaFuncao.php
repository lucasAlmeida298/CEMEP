<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <?php 
                include "funcaoData.php";
                dataAtual();
                include "funcaoHora.php";
                horaAtual()
                ?>
            </td>
        </tr>
    </table>
</body>
</html>