<?php

$usuarioCorreto = "ismael";
$senhaCorreta = "123456";

if(isset($_POST["entrar"])){
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if($login == $usuarioCorreto && $senha == $senhaCorreta){
        $_SESSION["msg"] = "Você está logado.";
        $_SESSION["logado"] = true; 
      
    }else{
        $_SESSION["msg"] = "Login ou Senha invalida.";
        $_SESSION["logado"] = false;
      
        
    }
}

if(isset($_SESSION["logado"])){
   if($_SESSION["logado"]){
    header("location: cadastro_clientes.php"); 
}
}

?>