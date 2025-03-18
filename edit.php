<?php
require 'config.php';
include 'includes/header.php';
if (!isset($_GET['id'])) {
  header('Location: index.php');
  exit;
}
$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM productos WHERE id = ?');
$stmt->execute([$id]);
$producto = $stmt->fetch();
if (!$producto) {
  echo "<div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4'>Producto no encontrado.</div>";
  include 'includes/footer.php';
  exit;
}
?>
<h1 class="text-3xl font-bold mb-6">Editar Producto</h1>
<form action="process.php" method="post" class="bg-white p-6 rounded-lg shadow-md">
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Nombre:</label>
    <input type="text" name="nombre" class="w-full border border-gray-300 p-2 rounded" value="<?php echo htmlspecialchars($producto['nombre']); ?>" required>
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Descripción:</label>
    <textarea name="descripcion" class="w-full border border-gray-300 p-2 rounded" rows="3" required><?php echo htmlspecialchars($producto['descripcion']); ?></textarea>
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Categoría:</label>
    <input type="text" name="categoria" class="w-full border border-gray-300 p-2 rounded" value="<?php echo htmlspecialchars($producto['categoria']); ?>" required>
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Precio:</label>
    <input type="number" step="0.01" name="precio" class="w-full border border-gray-300 p-2 rounded" value="<?php echo htmlspecialchars($producto['precio']); ?>" required>
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Stock:</label>
    <input type="number" name="stock" class="w-full border border-gray-300 p-2 rounded" value="<?php echo htmlspecialchars($producto['stock']); ?>" required>
  </div>
  <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
  <input type="hidden" name="action" value="update">
  <button type="submit" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">Actualizar Producto</button>
</form>
<?php include 'includes/footer.php'; ?>
