<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="caixa">
        <form action="verificar_login.php" method="POST">
            <label for="login">Nome</label>
            <input type="text" name="login">
            <label for="senha">Senha</label>
            <input type="password" name="senha">
    
            <input type="submit" name="salvar" value="entrar" name="entrar">
        </form>
</div>
</body>
</html>