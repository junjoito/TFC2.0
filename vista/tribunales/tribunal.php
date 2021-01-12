<?php
    require_once'../../controlador/barraNavegacion.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<div class="container">
    <br>
    
    <form class="needs-validation" novalidate action="/TFC2.0/controlador/tribunales/tribunales.php" method="post">
    <h1><span class="icon-users"></span>Agregar nuevo Tribunal</h1>
    <div class="linea"></div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Numero de Tribunal</label>
      <input type="text" class="form-control" id="validationCustom01" name="numtribunal" placeholder="Numero de Tribunal" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Lugar de Examen</label>
      <input type="text" class="form-control" id="validationCustom02" name="lugarexamnen"  placeholder="Lugar de Examen" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Numero de Componentes</label>
      <input type="text" class="form-control" id="validationCustom02" name="numcomponentes" placeholder="Numero de Componentes" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
  <button class="btn btn-secondary" type="reset">Cancel</button>
</form>
</div>  
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
    
</script>     
<script src="bootstrap-4.3.1-dist/js/jquery.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>  
</body>
</html> 