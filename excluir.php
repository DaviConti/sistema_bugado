<?php
require_once 'conexao.php';

if (!isset($_GET['id'])) {
    die('ID não informado');
}

$id = $_GET['id'];

// ❌ ERRO: O comando abaixo apagava TODOS os clientes.
$sql = "DELETE FROM clientes WHERE id = $id";
mysqli_query($conn, $sql);

// ❌ ERRO: Redirecionava para 'editar.php' após deletar.
header('Location: index.php');
exit;
?>
