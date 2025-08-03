<?php
session_start();
if (!isset($_SESSION['logado'])) {
  header('Location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Painel Administrativo</title>
</head>
<body>
  <h2>Bem-vindo ao Painel</h2>

  <form action="salvar_produto.php" method="post">
    <input type="text" name="titulo" placeholder="Título do Produto" required><br><br>
    <textarea name="conteudo" placeholder="Conteúdo do webook" rows="10" cols="40" required></textarea><br><br>
    <input type="text" name="webhook" placeholder="URL do Webhook"><br><br>
    <button type="submit">Salvar Produto</button>
  </form>
</body>
</html>