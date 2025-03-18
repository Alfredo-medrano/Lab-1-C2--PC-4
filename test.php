<?php
// test_connection.php
require 'config.php';

try {
    // Ejecutamos una consulta simple para verificar la conexión
    $stmt = $pdo->query("SELECT 'Conexión exitosa!' AS mensaje");
    $resultado = $stmt->fetch();

    echo $resultado['mensaje'];
} catch (Exception $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
