<?php 
    session_start();
    if(!isset($_SESSION["USUARIO"])){
        header("location: login.php?acao=faca_login");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web system</title>
</head>
<body>
    <h1>Bem vindo <?php echo $_SESSION["USUARIO"]; ?> </h1>

    <button><a href="login.php?logout=sair">Sair</a></button>
</body>
</html>