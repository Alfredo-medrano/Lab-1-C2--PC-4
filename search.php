<?php
require 'config.php';
include 'includes/header.php';
?>
<h1 class="text-3xl font-bold mb-6">Buscar Producto</h1>
<form action="search.php" method="get" class="bg-white p-6 rounded-lg shadow-md mb-6">
  <div class="mb-4">
    <label class="block text-gray-700 mb-2">Buscar por ID o Nombre:</label>
    <input type="text" name="query" class="w-full border border-gray-300 p-2 rounded" placeholder="Ingrese ID o nombre del producto">
  </div>
  <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Buscar</button>
</form>
<?php
if (isset($_GET['query']) && !empty(trim($_GET['query']))) {
  $query = trim($_GET['query']);
  $sql = "SELECT * FROM productos WHERE id = ? OR nombre LIKE ?";
  $stmt = $pdo->prepare($sql);
  $likeQuery = "%$query%";
  $stmt->execute([$query, $likeQuery]);
  $resultados = $stmt->fetchAll();
  if ($resultados) {
    echo "<h2 class='text-2xl font-bold mb-4'>Resultados de búsqueda:</h2>";
    echo "<div class='overflow-x-auto'>";
    echo "<table class='min-w-full bg-white rounded-lg shadow overflow-hidden'>";
    echo "<thead class='bg-blue-500 text-white'><tr>";
    echo "<th class='py-3 px-4 text-left'>ID</th>";
    echo "<th class='py-3 px-4 text-left'>Nombre</th>";
    echo "<th class='py-3 px-4 text-left'>Descripción</th>";
    echo "<th class='py-3 px-4 text-left'>Categoría</th>";
    echo "<th class='py-3 px-4 text-left'>Precio</th>";
    echo "<th class='py-3 px-4 text-left'>Stock</th>";
    echo "<th class='py-3 px-4 text-left'>Acciones</th>";
    echo "</tr></thead><tbody class='text-gray-700'>";
    foreach ($resultados as $producto) {
      echo "<tr class='border-b hover:bg-gray-50'>";
      echo "<td class='py-3 px-4'>" . htmlspecialchars($producto['id']) . "</td>";
      echo "<td class='py-3 px-4'>" . htmlspecialchars($producto['nombre']) . "</td>";
      echo "<td class='py-3 px-4'>" . htmlspecialchars($producto['descripcion']) . "</td>";
      echo "<td class='py-3 px-4'>" . htmlspecialchars($producto['categoria']) . "</td>";
      echo "<td class='py-3 px-4'>$" . htmlspecialchars($producto['precio']) . "</td>";
      echo "<td class='py-3 px-4'>" . htmlspecialchars($producto['stock']) . "</td>";
      echo "<td class='py-3 px-4'>";
      echo "<a href='edit.php?id=" . $producto['id'] . "' class='bg-green-500 hover:bg-green-600 text-white py-1 px-3 rounded mr-2'>Editar</a>";
      echo "<a href='delete.php?id=" . $producto['id'] . "' class='bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded' onclick='return confirmDelete();'>Eliminar</a>";
      echo "</td>";
      echo "</tr>";
    }
    echo "</tbody></table></div>";
  } else {
    echo "<div class='bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded'>No se encontraron resultados para: " . htmlspecialchars($query) . "</div>";
  }
}
include 'includes/footer.php';
?>
