<?php
include 'includes/header.php';
?>
<h1 class="text-3xl font-bold mb-6">Agregar Nuevo Producto</h1>
<form action="process.php" method="post" class="bg-white p-6 rounded-lg shadow-md">
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Nombre:</label>
    <input type="text" name="nombre" class="w-full border border-gray-300 p-2 rounded" required>
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Descripción:</label>
    <textarea name="descripcion" class="w-full border border-gray-300 p-2 rounded" rows="3" required></textarea>
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Categoría:</label>
    <input type="text" name="categoria" class="w-full border border-gray-300 p-2 rounded" placeholder="Ejemplo: Fruta, Verdura, Cereal" required>
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Precio:</label>
    <input type="number" step="0.01" name="precio" class="w-full border border-gray-300 p-2 rounded" required>
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Stock:</label>
    <input type="number" name="stock" class="w-full border border-gray-300 p-2 rounded" required>
  </div>
  <input type="hidden" name="action" value="create">
  <button type="submit" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">Agregar Producto</button>
</form>
<?php include 'includes/footer.php'; ?>
