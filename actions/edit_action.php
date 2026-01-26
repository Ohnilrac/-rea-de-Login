<?php 
session_start();
require_once "../config/db.php";

$email = trim($_POST["email"] ?? null);
$nome = trim($_POST["nome"] ?? null);
$telefone = trim($_POST["telefone"] ?? null);
$endereco = trim($_POST["endereco"] ?? null);

if(empty($email) || empty($nome) || empty($telefone) || empty($endereco)){
  echo "Todos os campos devem ser preenchidos.";
  exit;
}

  try{

    $sql = "UPDATE contas SET titular = :titular, email = :email, telefone = :telefone, endereco = :endereco WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ":id" => $_SESSION['id'],
      ":titular" => $nome,
      ":email" => $email,
      ":telefone" => $telefone,
      ":endereco" => $endereco,
    ]);

    header("Location: ../editar.php?status=success");
    exit();

  } catch(PDOException $e){
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
  }

?>