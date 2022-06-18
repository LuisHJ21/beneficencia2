
        <div class="row mb-2">
          <div class="col-sm-6 pt-4 pb-4">
            <h1>Miembros del Directorio Eliminados</h1>
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
                <div class="row justify-content-end">
                  <div class="col-md-3">
                   
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped text-center ">
                  <thead>
                  <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Restaurar</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($directorio as $dir): ?>
                  <tr>
                    <td><img style="width:100px"
                     src="<?php echo $dir['imagen'] ?>" alt=""></td>
                    <td><?php echo $dir['nombres'].' '.$dir['apellidos'] ?></td>
                    <td><?php echo $dir['cargo'] ?></td>
                    <td style="cursor: pointer;"
                    <?php 
                        echo "onclick='mdlrestaurar(\"".$dir['id_directorio']."\")'";
                    ?>
                    
                    ><i  class="fas fa-plus text-warning"></i></td>
                   
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
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


<div class="modal fade" id="restaurarMiembro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Restaurar Miembro</h5>
              </div>
              <div class="modal-body">¿Estas seguro de Restaurar este Miembro? 
                <form id="restaurarmiembro" action="<?php echo base_url() ?>/admin/directorio/restaurar" method="post">
                  <input hidden id="idrestaurar" name="idrestaurar" type="text">
                </form>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                  <button form="restaurarmiembro" type="submit" class="btn btn-warning"><i class="fas fa-plus"></i> Restaurar</button>
              </div>
          </div>
      </div>
</div>



<script>

function mdlrestaurar(id)
{
  $('#restaurarMiembro').modal('show');
  $('#idrestaurar').val(id);
}
</script>
     






