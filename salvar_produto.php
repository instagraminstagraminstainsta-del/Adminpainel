<?php
session_start();
if (!isset($_SESSION['logado'])) {
  header('Location: index.php');
  exit;
}

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$webhook = $_POST['webhook'];

$nomeArquivo = strtolower(str_replace(' ', '_', $titulo)) . ".html";

$pagina = "
<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>$titulo</title>
</head>
<body>
  <h1>$titulo</h1>
  <div>$conteudo</div>
  <p>Webhook configurado: $webhook</p>
</body>
</html>
";

file_put_contents("produtos/$nomeArquivo", $pagina);

echo "Produto salvo! <a href='produtos/$nomeArquivo' target='_blank'>Ver página</a>";