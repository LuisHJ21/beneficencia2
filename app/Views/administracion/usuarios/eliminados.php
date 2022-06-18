<div class="row mb-2">
          <div class="col-sm-6 pt-4 pb-4">
            <h1>Usuarios Eliminados</h1>
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
               
             
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped text-center ">
                  <thead>
                  <tr>
                    <th>Nombre de Usuario</th>
                    <th>Nombres y Apellidos</th>
                    <th>Sexo</th>
                    
                    <th>Restaurar</th>
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
                        echo "onclick='mdlrestaurar(\"".$usuario['id_usuario']."\")'";
                    ?>
                    
                    
                    ><i  class="fas fa-plus text-warning"></i></td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre de Usuario</th>
                    <th>Nombres y Apellidos</th>
                    <th>Sexo</th>
                    
                    <th>Restaurar</th>
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



<div class="modal fade" id="restaurarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Restaurar Usuario</h5>
              </div>
              <div class="modal-body">¿Estas seguro de Restaurar este Usuario? 
                <form id="restaurarusuario" action="<?php echo base_url() ?>/admin/usuarios/restaurar" method="post">
                  <input hidden id="idrestaurar" name="idrestaurar" type="text">
                </form>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                  <button form="restaurarusuario" type="submit" class="btn btn-warning"><i class="fas fa-plus"></i> Restaurar</button>
              </div>
          </div>
      </div>
</div>



<script>

function mdlrestaurar(id)
{
  $('#restaurarUsuario').modal('show');
  $('#idrestaurar').val(id);
}
</script>