<?php

ob_start();
include_once('includes/header.php');
include_once('../negocio/NUsuario.php');
$_POST['id_edit']=$_GET['usuario'];

?>  
    <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">usuarios</h1>
          </div>
          <div class="card shadow mb-4">
        <div class="card-header py-3">
        Editar
        </div>
        <div class="card-body">
             <!-- Page Heading -->
          <form action="../negocio/NUsuario.php" class="was-validated" method = "POST" >
        
          <div class="form-group">
                <label for="uname">Nombre</label>
                  <input type="text" class="form-control" id="uname" placeholder= ""  name="nombre_edit" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>

                <label for="uname">Correo</label>
                  <input type="text" class="form-control" id="uname" placeholder="Enter correo" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>

                <label for="uname">Contrasena</label>
                  <input type="pass" class="form-control" id="uname" placeholder="Enter password" name="password" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>




  <button type="submit" class="btn btn-primary">Editar</button>

</div>
</div>
</form>

<?php
include_once('includes/footer.php');
?>
