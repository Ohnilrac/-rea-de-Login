<?php 
require_once "../config/db.php";

$email = $_POST["email"] ?? null;
$senha = $_POST["senha"] ?? null;
$nome = $_POST["nome"] ?? null;

if(isset($email) || isset($senha)){

  try{

    $senha_c = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO contas ( titular, email, senha) VALUES ( :titular, :email, :senha)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ":titular" => $nome,
      ":email" => $email,
      ":senha" => $senha_c
    ]);

    echo "Cadastro realizado com sucesso!";

  } catch(PDOException $e){
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
  }

}

?>