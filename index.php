<?php
session_start();
$senha = 'admin123'; // Mude essa senha!

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['senha'] === $senha) {
        $_SESSION['logado'] = true;
        header('Location: painel.php');
        exit;
    } else {
        $erro = "Senha incorreta.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login - Painel Admin</title>
</head>
<body>
  <h2>Login</h2>
  <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
  <form method="post">
    <input type="password" name="senha" placeholder="Digite a senha" required>
    <button type="submit">Entrar</button>
  </form>
</body>
</html>