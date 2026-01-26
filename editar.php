<?php 
session_start();
require_once("config/db.php");

if(!isset($_SESSION['id'])){
  header("Location: index.php");
}

$sql = "SELECT titular FROM contas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
  ':id' => $_SESSION['id']
]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
$titular = $usuario['titular'];

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
  <title>Editar</title>
</head>
<body>
  <div class="container">

  <header>
    <nav class="edit">
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

      <?php 
      
      if($_GET['status'] == 'success'){
        echo "<p>Conta atualizada com sucesso!</p>";
      }

      ?>
    </main>
  </div>
</body>
</html>