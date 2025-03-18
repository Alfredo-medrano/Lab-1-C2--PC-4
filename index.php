<?php
require 'config.php';
include 'includes/header.php';
if(isset($_GET['msg'])) {
  $msg = htmlspecialchars($_GET['msg']);
  echo "<div class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4'>$msg</div>";
}
$stmt = $pdo->query('SELECT * FROM productos ORDER BY created_at DESC');
$productos = $stmt->fetchAll();
?>
<h1 class="text-3xl font-bold mb-6">Listado de Productos</h1>
<div class="overflow-x-auto">
  <table class="min-w-full bg-white rounded-lg shadow overflow-hidden">
    <thead class="bg-green-600 text-white">
      <tr>
        <th class="py-3 px-4 text-left">ID</th>
        <th class="py-3 px-4 text-left">Nombre</th>
        <th class="py-3 px-4 text-left">Descripción</th>
        <th class="py-3 px-4 text-left">Categoría</th>
        <th class="py-3 px-4 text-left">Precio</th>
        <th class="py-3 px-4 text-left">Stock</th>
        <th class="py-3 px-4 text-left">Acciones</th>
      </tr>
    </thead>
    <tbody class="text-gray-700">
      <?php foreach($productos as $producto): ?>
        <tr class="border-b hover:bg-gray-50">
          <td class="py-3 px-4"><?php echo htmlspecialchars($producto['id']); ?></td>
          <td class="py-3 px-4"><?php echo htmlspecialchars($producto['nombre']); ?></td>
          <td class="py-3 px-4"><?php echo htmlspecialchars($producto['descripcion']); ?></td>
          <td class="py-3 px-4"><?php echo htmlspecialchars($producto['categoria']); ?></td>
          <td class="py-3 px-4"><?php echo '$' . htmlspecialchars($producto['precio']); ?></td>
          <td class="py-3 px-4"><?php echo htmlspecialchars($producto['stock']); ?></td>
          <td class="py-3 px-4">
            <a href="edit.php?id=<?php echo $producto['id']; ?>" class="bg-green-500 hover:bg-green-600 text-white py-1 px-3 rounded mr-2" onclick="return confirmUpdate();">Editar</a>
            <a href="delete.php?id=<?php echo $producto['id']; ?>" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded" onclick="return confirmDelete();">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php include 'includes/footer.php'; ?>
