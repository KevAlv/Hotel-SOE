<?php
ob_start();
include_once('includes/header.php');
include_once('../negocio/NUsuario.php');
$usuarios = new NUsuario;
?>  
    <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">usuarios</h1>
          </div>
          <div class="card shadow mb-4">
        <div class="card-header py-3">
        Agregar
        </div>
        <div class="card-body">
             <!-- Page Heading -->
          <form action="../negocio/NUsuario.php" class="was-validated" method = "POST" enctype="multipart/form-data">
          <div class="form-group">
                <label for="uname">Nombre</label>
                  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="nombre" required>
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




  <button type="submit" class="btn btn-primary">Guardar</button>

</div>
</div>
</form>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Nombre</th>
                      <th>Email</th>
                      <th>Fecha</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach($usuarios->getAll() as $usuario): ?>
                <tr>
                  <td><?php echo $usuario->nombre?></td>
                  <td><?php echo $usuario->email?></td>
                  <td><?php echo $usuario->fecha?></td>
                  <td>

                      <a href="../negocio/NUsuario.php?delete_id=<?php echo $usuario->id_u; ?>">Eliminar</a>
                      <a href="usuarios_edit.php?usuario=<?php echo $usuario->id_u; ?>">Editar</a>
                      
                  </td>
                </tr>
              <?php endforeach;?>
                                <tr>
                              </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- End of datatable -->
<?php
include_once('includes/footer.php');
?>
