<!-- Pie de pagina (footer) -->
<footer class="seccion-oscura d-flex flex-column align-items-center justify-content-center">

  <!-- PHP: Mostrar año actual -->
  <div class="derechos-de-autor">&#169; <?php $year = date('Y');echo "$year"; ?> • Jr Santiago Ravelo — All rights reserved.</div>
  
</footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="script.js?v=<?php echo filemtime('script.js'); ?>"></script>
</body>

</html>