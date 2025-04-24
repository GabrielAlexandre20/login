<?php
include('/backend/login.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <main>
    <form action="login.php" method="POST" class="login">
      <div class="dados">
        <input class="novas" type="email" name="email" placeholder="E-Mail" required>
      </div>
      <div class="dados">
        <input class="novas" type="password" name="senha" placeholder="Senha" required>
      </div>
      <input class="botao" type="submit" value="Entrar">
      <p class="textos text-center">Seja bem-vindo à nossa página de login!</p>
    </form>
    <div class="register">
      <p class="registre">Não tem uma conta? <a href="register.php">Registre-se</a></p>
    </div>
  </main>
</body>
</html>

