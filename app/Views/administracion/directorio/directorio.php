<?php $session=session(); ?>
        <div class="row mb-2">
          <div class="col-sm-6 pt-4 pb-4">
            <h1>Miembros del Directorio</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <?php if($session->success){ ?>
                  <div class="alert alert-success" role="alert">
                    <i class="fas fa-check"></i> <?php echo $session->success; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php } ?>

                  <?php if($session->error){ ?>
                  <div class="alert alert-danger" role="alert">
                  <i class="fas fa-times"></i> <?php echo $session->error; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php } ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped text-center ">
                  <thead>
                  <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($directorio as $dir): ?>
                  <tr>
                    <td style="cursor:pointer"
                    <?php
                      echo "onclick='mdlModificarImagen(\"".$dir['id_directorio']."\",\"".$dir['nombres'].' '.$dir['apellidos']."\")'"
                    ?>
                    ><img style="width:100px"
                     src="<?php if(!$dir['imagen']){echo base_url('/images/no-imagen-directorio.jpg');}else{echo $dir['imagen'];} ?>" alt=""></td>
                    <td><?php echo $dir['nombres'].' '.$dir['apellidos'] ?></td>
                    <td><?php echo $dir['cargo'] ?></td>
                    <td tyle="cursor: pointer;"
                      <?php 
                        echo "onclick='mdleditar(\"".$dir['id_directorio']."\",\"".$dir['nombres']."\",\"".$dir['apellidos']."\",\"".$dir['cargo']."\")'";

                      ?>
                    
                    
                    ><i  class="fas fa-edit text-success"></i></td>


          
                    <td style="cursor: pointer;"
                    <?php 
                        echo "onclick='mdleliminar(\"".$dir['id_directorio']."\")'";
                    ?>
                    
                    ><i  class="fas fa-trash text-danger"></i></td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->





  <!-- Modal Agregar Imagen-->
<div class="modal fade" id="agregarImagen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Imagen del Miembro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="subirimagen" method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>/admin/directorio/agregar/subirimagen" autocomplete="off">
        <input hidden="true" type="text" class="form-control" id="idagregarimagen" name="idagregarimagen"  required> 
          <div class="form-group">
            <label for="nombre">Nombre del Miembro</label>
            <input readonly type="text" class="form-control" id="tituloimagen" name="tituloimagen">
          </div>
          <div class="form-group">
            <input accept=".jpeg,.jpg,.png" onchange="return fileValidation()" type="file" class="form-control-file" id="imagensubir" name="imagensubir" required>
          </div>

          <span>*Solo formato .JPG, JPEG y PNG</span>
          
        </form>
      </div>
      <div class="modal-footer">
      <div class="container-fluid">
              <div class="row">
                  <div class="col-md-4">
                    <div hidden class="animacion" id="animacion">
                    <i class="fas fa-spin fa-sync"></i> Subiendo Imagen...
                    </div>
                  </div>
                  <div class="col-md-4"></div>
                  <div class="col-md-2">
                    <button id="cancelar" type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cerrar</button>
                  </div>
                  <div class="col-md-2">
                    <button id="imagensubir" onclick="subirimagen()" type="button" class="btn btn-success">Guardar</button>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="eliminarMiembro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Eliminar Miembro</h5>
              </div>
              <div class="modal-body">¿Estas seguro de Eliminar este Miembro? 
                <form id="eliminarmiembro" action="<?php echo base_url() ?>/admin/directorio/eliminar" method="post">
                  <input hidden id="ideliminar" name="ideliminar" type="text">
                </form>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                  <button form="eliminarmiembro" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
              </div>
          </div>
      </div>
</div>


 <!-- Modal editar-->
 <div class="modal fade" id="editarMiembro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Miembri</h5>
        
      </div>
      <div class="modal-body">
        <form id="editarmiembro" method="POST" action="<?php echo base_url()?>/admin/directorio/actualizar" autocomplete="off">
          
          <div class="form-group">
           
          <input hidden id="ideditar" name="ideditar" type="text">
            <label for="nombre">Nombres</label>
            <input type="text" class="form-control" onkeypress="return soloLetras(event)" id="nombreseditar" name="nombreseditar" placeholder="Nombres" autofocus required minlength=2 maxlength=50>
          </div>
          <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" class="form-control" onkeypress="return soloLetras(event)" id="apellidoseditar" name="apellidoseditar" placeholder="Apellidos"  required minlength=2 maxlength=50>
          </div>
          <div class="form-group">
          <label for="cargo">Cargo</label>
            <input type="text" class="form-control" onkeypress="return soloLetras(event)" id="cargoeditar" name="cargoeditar" placeholder="Cargo"  required minlength=2 maxlength=50>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button form="editarmiembro" type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>



<script>

function mdlModificarImagen(id,nombre)
  {
    $('#agregarImagen').modal('show');
    $('#idagregarimagen').val(id);
    $('#tituloimagen').val(nombre);
  }

  function subirimagen()
  {
      animacion=document.getElementById("animacion");
      
      btn2=document.getElementById("cancelar");
      img=document.getElementById("imagensubir");
      
      
      animacion.removeAttribute("hidden");
      $('#subirimagen').submit();
      btn2.setAttribute("disabled","");
      img.setAttribute("disabled","");
  }

  function mdleliminar(id)
{
  $('#eliminarMiembro').modal('show');
  $('#ideliminar').val(id);

}

function mdleditar(id,nombres,apellidos,cargo)
{
  $('#editarMiembro').modal('show');
  $('#ideditar').val(id);
  $('#nombreseditar').val(nombres);
  $('#apellidoseditar').val(apellidos);
  $('#cargoeditar').val(cargo);
}

function fileValidation(){
    var fileInput = document.getElementById('imagensubir');
    var filePath = fileInput.value;
    var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Solo Se Permiten Archivos con extension .JPG, .JPEG y .PNG');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}

</script>



