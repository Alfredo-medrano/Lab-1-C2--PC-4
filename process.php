<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'];
  $nombre = trim($_POST['nombre']);
  $descripcion = trim($_POST['descripcion']);
  $categoria = trim($_POST['categoria']);
  $precio = trim($_POST['precio']);
  $stock = trim($_POST['stock']);
  if ($action === 'create') {
    $stmt = $pdo->prepare("INSERT INTO productos (nombre, descripcion, categoria, precio, stock) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nombre, $descripcion, $categoria, $precio, $stock]);
    header('Location: index.php?msg=' . urlencode('Se creó el producto con éxito'));
  } elseif ($action === 'update' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("UPDATE productos SET nombre = ?, descripcion = ?, categoria = ?, precio = ?, stock = ? WHERE id = ?");
    $stmt->execute([$nombre, $descripcion, $categoria, $precio, $stock, $id]);
    header('Location: index.php?msg=' . urlencode('Se actualizó el producto con éxito'));
  }
  exit;
}
?>
