<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];

    // ERRO: Faltava ponto e vírgula no final desta linha.
    $cpf = $_POST['cpf'];

    $sql = "INSERT INTO clientes (nome, cpf) VALUES ('$nome', '$cpf')";
    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro</title>
</head>
<body>
  <h1>Cadastrar Cliente</h1>
  <form method="post">
    <label>Nome:<br><input type="text" name="nome"></label><br><br>
    <label>CPF:<br><input type="text" name="cpf"></label><br><br>

    // ERRO: O botão estava com type vazio ("").
    <button type="submit">Salvar</button>
  </form>

  // ERRO: O link estava sem a extensão do arquivo (index → index.php)
  <p><a href="index.php">Voltar</a></p>
</body>
</html>
