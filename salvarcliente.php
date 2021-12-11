<?php


$nomeCliente = $_GET["nome"];
$cpfCliente = $_GET["cpf"];
$foneCliente = $_GET["fone"];
$emailCliente = $_GET["email"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Salvar Cliente</title>
</head>
<body>
    
<h3>Tabela de Clientes</h3>
    <table border="1">

        <tr>
            <td><b>Nome Completo:</b></td>
            <td><?php echo $nomeCliente; ?></td>

            <td><b>CPF:</b>
            </td>
            <td><?php echo $cpfCliente; ?></td>
            
            <td><b>Telefone:</b>
            </td>
            <td><?php echo $foneCliente; ?></td>
            </tr>
            <td><b>Email:</b>
            </td>
            <td><?php echo $emailCliente; ?></td>
        </tr>
    </table>
</body>
</html>
