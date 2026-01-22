<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>Tela de Cadastro</title>
</head>
<body>
  <header>
    <nav>
      <svg></svg>
      <h4>Área de Cadastro</h4>
    </nav>
  </header>

  <div>
    <svg></svg>
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

  <div>
    <p>Já tem uma conta? <a href="index.php">Realizar Login</a></p>
  </div>

</body>
</html>