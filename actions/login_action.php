<?php 
session_start();
require_once("../config/db.php");

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
            header("Location: ../dashboard.php");
          } else {
            echo "<p>Usuário ou senha incorretos</p>";
          }
        }
      
?>