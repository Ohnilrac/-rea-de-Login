<?php 
session_start();
require_once("config/db.php");

if(!isset($_SESSION['id'])){
  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a325e67bc5.js" crossorigin="anonymous"></script>
  <title>Perfil</title>
</head>
<body>
  
<div class="container">

    <header>
      <nav>
        <i class="fa-solid fa-chevron-left" onclick="history.back()"></i>
        <h4>Perfil</h4>
        <i class="fa-solid fa-gear" onclick="window.location.href='editar.php'"></i>
      </nav>
    </header>
    
    <div class="content">
      <i class="fa-solid fa-circle-user"></i>
      <h1><?= $_SESSION['nome'] ?></h1>
      <p>Conta: <?= $_SESSION['conta'] ?></p>
    </div>
    
    <main>
      <h3>Detalhes da conta</h3>
      <div class="infos">
        <div class="info">
          <i class="fa-solid fa-envelope"></i>
          <div>
            <p><?= $_SESSION['email'] ?></p>
            <p>Endereço de e-mail</p>
          </div>
        </div>
        <div class="info">
          <i class="fa-solid fa-phone"></i>
          <div>
            <p><?= $_SESSION['telefone'] ?></p>
            <p>Número de telefone</p>
          </div>
        </div>
        <div class="info">
          <i class="fa-solid fa-location-dot"></i>
          <div>
            <p><?= $_SESSION['endereco'] ?></p>
            <p>Localização</p>
          </div>
      </div>
        <button onclick="window.location.href = 'editar.php'">Editar Perfil</button>
    </main>
    
    <div class="footer-profile">
      <div class="icons">
        <i class="fa-solid fa-house"></i>
        <p>Home</p>
      </div>
      <div class="icons">
        <i class="fa-solid fa-user"></i>
        <p>Profile</p>
      </div>
      <div class="icons">
        <i class="fa-solid fa-bell"></i>
        <p>Inbox</p>
      </div>
    </div>
    
  </div>

</body>
</html>