<?php
include_once('includes/header.php');
include_once('../negocio/NCategoria.php');
$categorias = new NCategoria;
?>
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categorias</h1>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        Agregar
        </div>
        <div class="card-body">
                  <!-- Page Heading -->
          <form action="/action_page.php" class="was-validated">
          <div class="form-group">
    <label for="uname">Tipo</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>

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
                      <th>Nro</th>
                      <th>Imagen</th>
                      <th>Color</th>
                      <th>Descripcion</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach($categorias->getAll() as $categoria): ?>
    <tr>
      <td><?php echo $categoria->id?></td>
      <td><?php echo $categoria->color?></td>
      <td><?php echo $categoria->img?></td>
      <td><?php echo $categoria->descripcion?></td>
      <td><a href="index.php?controller=animal&action=showById&id=<?php echo $animal->id; ?>">Editar</a>
      <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="index.php?controller=animal&action=quit&id=<?php echo $animal->id; ?>">Eliminar</a></td>
    </tr>
  <?php endforeach;?>
                    <tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  
<?php
include_once('includes/footer.php');
?>
