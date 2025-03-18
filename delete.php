<?php
require 'config.php';
if (!isset($_GET['id'])) {
  header('Location: index.php');
  exit;
}
$id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM productos WHERE id = ?');
$stmt->execute([$id]);
header('Location: index.php?msg=' . urlencode('Se eliminó el producto con éxito'));
exit;
?>
