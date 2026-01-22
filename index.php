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
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>Tela de Login</title>
</head>
<body>
  <header>
    <nav>
      <svg></svg>
      <h4>Área de Login</h4>
    </nav>
  </header>

  <div>
    <svg></svg>
    <h1>Olá, esse é um projeto de login</h1>
    <p>Insira seus dados abaixo para efetuar o login ou realize o cadastro</p>
  </div>

  <main>
    <?php 
    
      if(isset($_POST['email']) && isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM contas WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
          'email' => $email
        ]);

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if($usuario && password_verify($senha, $usuario['senha'])){
          $_SESSION['id'] = $usuario['id'];
          $_SESSION['email'] = $usuario['email'];
          header("Location: dashboard.php");
        } else {
          echo "<p>Usuário ou senha incorretos</p>";
        }
      }
    
    ?>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="email">Digite seu email</label>
      <input type="text" name="email" placeholder="Email" required>
      <label for="senha">Digite sua senha</label>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">Entrar</button>
    </form>
  </main>

  <div>
    <p>Não tem conta? <a href="cadastro.php">Cadastre-se agora!</a></p>
  </div>

</body>
</html>