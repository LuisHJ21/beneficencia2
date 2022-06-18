<?php $session=session();?>
        <div class="row mb-2">
          <div class="col-sm-6 pt-4 pb-4">
            <h1>Usuarios del Sistema</h1>
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
                    <th>Nombre de Usuario</th>
                    <th>Nombres y Apellidos</th>
                    <th>Sexo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($usuarios as $usuario): ?>
                  <tr>
                    <td><?php echo $usuario['nombre_usuario'] ?></td>
                    <td><?php echo $usuario['nombres'].' '.$usuario['apellidos'] ?></td>
                    <td><?php echo $usuario['sexo'] ?></td>
                    <td style="cursor: pointer;"
                      <?php 
                        echo "onclick='mdleditar(\"".$usuario['id_usuario']."\",\"".$usuario['nombres']."\",\"".$usuario['apellidos']."\",\"".$usuario['sexo']."\")'";

                      ?>
                    ><i  class="fas fa-edit text-success"></i></td>
                    <td style="cursor: pointer;"
                    <?php 
                        echo "onclick='mdleliminar(\"".$usuario['id_usuario']."\")'";
                    ?>
                    
                    
                    ><i  class="fas fa-trash text-danger"></i></td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre de Usuario</th>
                    <th>Nombres y Apellidos</th>
                    <th>Sexo</th>
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


 <!-- Modal editar-->
 <div class="modal fade" id="editarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        
      </div>
      <div class="modal-body">
        <form id="editarusuario" method="POST" action="<?php echo base_url()?>/admin/usuarios/actualizar" autocomplete="off">
          
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
            <label for="genero">Sexo:</label>
            <select class="form-control" name="genero" id="genero" required>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button form="editarusuario" type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
              </div>
              <div class="modal-body">¿Estas seguro de Eliminar este Usuario? 
                <form id="eliminarusuario" action="<?php echo base_url() ?>/admin/usuarios/eliminar" method="post">
                  <input hidden id="ideliminar" name="ideliminar" type="text">
                </form>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                  <button form="eliminarusuario" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
              </div>
          </div>
      </div>
</div>


<script>

function mdleditar(id,nombres,apellidos,sexo)
{
  $('#editarUsuario').modal('show');
  $('#ideditar').val(id);
  $('#nombreseditar').val(nombres);
  $('#apellidoseditar').val(apellidos);
  $('#genero').val(sexo);
}

function mdleliminar(id)
{
  $('#eliminarUsuario').modal('show');
  $('#ideliminar').val(id);

}


function soloLetras(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
      especiales = [8, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
}

</script>



