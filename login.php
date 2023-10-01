<?php 
    session_start();
    define('USER', 'admin');
    define('PASS', '1234');
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login-style.css">
    <link rel="stylesheet" href="assets/css/login-queries.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
    <title>Web system login</title>
</head>
<body>
    <div id="container">
        <div id="card-login-header">
            <h1>Faça login</h1>
        </div>
        <div id="card-login">
            <div id="ilustration">
                <img src="assets/imgs/Croods - The Feedback.png" alt="Ilustração">
            </div>
            <div id="form">
                <form action="#" method="post">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="admin">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="1234">
                    <input type="submit" value="Entrar">
                    <p class="error">
                        <?php 
                            if(isset($_POST["name"]) && isset($_POST["password"])){
                                $user = $_POST["name"];
                                $pass = $_POST["password"];
                                if($user != USER || $pass != PASS){
                                    echo "Usuário ou senha inválidos";
                                }
                            }
                        ?>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    if(isset($_GET["logout"])){
        if($_GET["logout"] == 'sair'){
            unset($_SESSION["USUARIO"]);
        }
    }

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        if(isset($_POST["name"]) && isset($_POST["password"])){
            $user = $_POST["name"];
            $pass = $_POST["password"];
            if($user == USER && $pass == PASS){
                $_SESSION["USUARIO"] = $user;
                header("location: index.php");
            }
        }
    }
?>