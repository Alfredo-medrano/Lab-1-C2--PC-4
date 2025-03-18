</div>
  <footer class="bg-green-700 text-white p-4 mt-8">
    <div class="container mx-auto text-center">
      &copy; <?php echo date("Y"); ?> Agromercado CRUD Lab
    </div>
  </footer>
  <script>
    function confirmDelete() {
      return confirm('¿Estás seguro de eliminar este producto?');
    }
    document.addEventListener('DOMContentLoaded', function() {
      console.log("La página se ha cargado correctamente.");
    });
  </script>
</body>
</html>
