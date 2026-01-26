<?php 
require_once "../config/db.php";

$email = $_POST["email"] ?? null;
$senha = $_POST["senha"] ?? null;
$nome = $_POST["nome"] ?? null;
$telefone = $_POST["telefone"] ?? null;
$endereco = $_POST["endereco"] ?? null;
$conta = $_POST["conta"] ?? null;

if(isset($email) || isset($senha)){

  try{

    $senha_c = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO contas ( titular, email, senha, telefone, endereco, conta) VALUES ( :titular, :email, :senha, :telefone, :endereco, :conta)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ":titular" => $nome,
      ":email" => $email,
      ":senha" => $senha_c,
      ":telefone" => $telefone,
      ":endereco" => $endereco,
      ":conta" => $conta
    ]);

    header("Location: ../dashboard.php");
    exit();

  } catch(PDOException $e){
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
  }

}

?>