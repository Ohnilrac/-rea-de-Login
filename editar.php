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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
</head>
<body>
  <div class="container">

  <header>
      <nav>
        <i class="fa-solid fa-chevron-left" onclick="history.back()"></i>
        <h4>Perfil</h4>
        <a onclick="window.location.href='dasboard.php'">Cancelar</a>
      </nav>
    </header>

    <div class="content">
      <i class="fa-solid fa-circle-user"></i>
      <h1><?= $titular ?></h1>
    </div>

    <main>
      <form action="actions/edit_action.php" method="post">
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" placeholder="Nome" required>
        <label for="email">Digite seu email:</label>
        <input type="text" name="email" placeholder="Email" required>
        <label for="telefone">Digite seu telefone:</label>
        <input type="text" name="telefone" placeholder="Ex: (99) 99999-9999" required>
        <label for="endereco">Digite seu endereço:</label>
        <input type="text" name="endereco" placeholder="Ex: Rua das Flores, 123" required>
        <button type="submit">Salvar mudanças</button>
      </form>
    </main>
    
    <div class="footer">
      <?php 
      
      if($_GET['status'] == 'success'){
        echo "<p>Conta atualizada com sucesso!</p>";
      }

      ?>

    </div>
  </div>
</body>
</html>