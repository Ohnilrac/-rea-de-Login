<?php 
session_start();
require_once("config/db.php");

if(isset($_SESSION['id'])){
  header("Location: dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="/assets/js/script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a325e67bc5.js" crossorigin="anonymous"></script>
  <title>Tela de Login</title>
</head>
<body>
  <div class="container">

    <header class="header">
      <h4>Área de Login</h4>
    </header>
  
    <div class="content">
      <i class="fa-solid fa-circle-user"></i>
      <h1>Bem vindo de volta!</h1>
      <p>Preencha os seus dados abaixo para logar. </p>
    </div>
  
    <main>
      <form action="actions/login_action.php" method="post">
        <label for="email">Digite seu email:</label>
        <input type="text" name="email" placeholder="Email@dominio.com" required>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <button type="submit">Entrar</button>
      </form>
    </main>
  
    <div class="footer">
      <p>Não tem conta? <a href="cadastro.php">Cadastre-se agora!</a></p>
    </div>
    
  </div>

</body>
</html>