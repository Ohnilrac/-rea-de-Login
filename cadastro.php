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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a325e67bc5.js" crossorigin="anonymous"></script>
  <title>Tela de Cadastro</title>
</head>
<body>
  <div class="container">

    <header>
      <nav>
        <i class="fa-solid fa-chevron-left" onclick="history.back()"></i>
        <h4>Área de Cadastro</h4>
      </nav>
    </header>
    
    <div class="content">
      <h1>Crie sua conta</h1>
      <p>Insira seus dados abaixo para efetuar o cadastro</p>
    </div>
    
    <main>
      <form action="actions/cadastro_action.php" method="post">
        <label for="nome">Digite seu nome</label>
        <input type="text" name="nome" placeholder="Nome" required>
        <label for="email">Digite seu email</label>
        <input type="text" name="email" placeholder="Email" required>
        <label for="senha">Digite sua senha</label>
        <input type="password" name="senha" placeholder="Senha" required minlength="8">
        <button type="submit">Cadastrar</button>
      </form>
    </main>
    
    <div class="footer">
      <p>Já tem uma conta? <a href="index.php">Realizar Login</a></p>
    </div>
    
  </div>
</body>
</html>