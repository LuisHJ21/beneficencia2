<?php $session=session();?>
        <div class="row mb-2">
          <div class="col-sm-6 pt-4 pb-4">
            <h1>Listado de Noticias</h1>
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
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Anexar Imagenes</th>
                   
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($noticias as $noti): ?>
                  <tr>
                    <td><img style="width:100px; max-height:150px ;"
                     src="<?php if(!$noti['imagen']){echo base_url('/images/no-imagen.jpg');}else{echo $noti['imagen'];}  ?>" alt=""></td>
                    <td><?php echo $noti['titulo'] ?></td>
                    <td><?php
                      $fecha=$noti['creado'];
                      $nuevafecha=date('d-m-Y',strtotime($fecha));
                    echo $nuevafecha ?></td>

                    <td style="cursor:pointer;"
                    
                    <?php 
                    
                    echo "onclick='mdlanexar(\"".$noti['id_noticia']."\")'"
                    
                    ?>

                    
                    ><i  class="fas fa-plus text-primary"></i></td>


                    <td style="cursor: pointer;"
                    <?php 
                        echo "onclick='mdleliminar(\"".$noti['id_noticia']."\")'";
                    ?>
                    ><i  class="fas fa-trash text-danger"></i></td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Anexar Imagenes</th>
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
     



<div class="modal fade" id="eliminarNoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Eliminar Noticia</h5>
              </div>
              <div class="modal-body">¿Estas seguro de Eliminar esta Noticia? 
                <form id="eliminarnoticia" action="<?php echo base_url() ?>/admin/noticias/eliminar" method="post">
                  <input hidden id="ideliminar" name="ideliminar" type="text">
                </form>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                  <button form="eliminarnoticia" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
              </div>
          </div>
      </div>
</div>



<div class="modal fade" id="anexarImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Subir Imagenes</h5>
              </div>
              <div class="modal-body">
                <form id="anexarimagenes" enctype="multipart/form-data" action="<?php echo base_url() ?>/admin/noticias/anexar" method="post">
                  <input hidden type="text" name="idsubir" id="idsubir">
                  <input type="file" name="imagenessubir[]" id="imagenessubir" multiple="multiple">
                </form>
                <span>*Solo formato .JPG, JPEG y PNG</span>
              </div>
              <div class="modal-footer">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-4">
                        <div hidden class="animacion" id="animacion">
                          <i class="fas fa-spin fa-sync"></i> Subiendo Imagenes...
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





<script>

function mdleliminar(id)
{
  $('#eliminarNoticia').modal('show');
  $('#ideliminar').val(id);

}

function subirimagen()
  {
      animacion=document.getElementById("animacion");
      
      btn2=document.getElementById("cancelar");
      img=document.getElementById("imagensubir");
      
      
      animacion.removeAttribute("hidden");
      $('#anexarimagenes').submit();
      btn2.setAttribute("disabled","");
      img.setAttribute("disabled","");
  }

  function mdlanexar(id)
  {
    $('#anexarImagen').modal('show');
    $('#idsubir').val(id);
  }


</script>
     