<?php $session=session(); ?>
<div class="container">

<div class="titulo py-4">
    <h1 class="text-center">Lista de Imagenes del Slide</h1>
</div>

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
    <i class="fas fa-times"></i> <?php echo $session->success; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>


    <?php if($session->successactualizar){ ?>
    <div class="alert alert-success" role="alert">
      <i class="fas fa-check"></i> <?php echo $session->successactualizar; ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>

    <?php if($session->erroractualizar){ ?>
    <div class="alert alert-danger" role="alert">
    <i class="fas fa-times"></i> <?php echo $session->erroractualizar; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>

<div class="row">

<?php if(count($slides)==0){ ?>

<div class="col-12">
    <h4 class="text-center text-secondary">No Hay Slides Agregados</h4>
</div>


<?php  } ?>

    <?php foreach($slides as $slide): ?>

    <div class="col-sm-12 col-md-3">
        <div class="card" style="padding: 0.5rem;">
            <img style="width:100%; height:200px;" src="<?php echo $slide['imagen'] ?>" alt="">
            <div class="card-img-overlay"style="padding: 0.25rem !important;">
                <div class="row justify-content-end" style="padding: 0.75rem;">
                    <div class="col-sm-4 ">
                        <a <?php echo "onclick='mdlEliminarImagen(\"".$slide['id_slide']."\",\"".$slide['public_id']."\")'" ?>  type="button" class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
              <h3 class="text-center"> <?php  echo $slide['titulo'] ?></h3>
              <hr>
              <?php  echo $slide['contenido'] ?>
            </div>

          

        </div>

        <hr>
        <div class="mb-3">
              <a

      <?php 

      echo "onclick='mdlactualizar(\"".$slide['id_slide']."\",\"".$slide['titulo']."\",\"".$slide['contenido']."\")'"

      ?>


      type="button" class="btn btn-outline-success btn-block" 



      ><i class="fas fa-pencil-alt mr-1"></i>Editar Contenido</a>
        </div>
        
        
    </div>

    <?php endforeach ?>
   

  

    <div class="col-sm-12">
        <div class="row justify-content-center">
            <div class="col-sm-6">
             <button <?php if(count($slides) >=8){echo "disabled";} ?> onclick="mdlModificarImagen()" type="button" class="btn btn-outline-success btn-block"><i class="fas fa-plus"></i> Agregar Imagen <small>(Máximo 8)</small></button>
            </div>
        </div>
    </div>

</div>


</div>



  <!-- Modal Agregar Imagen-->
<div class="modal fade" id="agregarImagen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nueva Imagen</h5>
        
      </div>
      <div class="modal-body">
        <form id="subirimagen" method="POST" enctype="multipart/form-data"  action="<?php echo base_url() ?>/admin/slides/agregar">
          <div class="form-group">
            <input onchange="return fileValidation()" accept=".jpeg,.jpg,.png" type="file" class="form-control-file" name="imagensubir" id="imagensubir" required>
          </div>

          <span>*Solo formato .JPG, JPEG y PNG</span>

          <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo">
          </div>

          <div class="form-group">
          <label for="">Contenido</label>
           <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="5"></textarea>
          </div>
          
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
                     <button id="enviar" onclick="animacion()"  class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
                     <button id="original" hidden form="subirimagen" type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>

                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>




  <!-- Modal actualizar contenido-->
  <div class="modal fade" id="actualizarContenido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos Slide</h5>
        
      </div>
      <div class="modal-body">
        <form id="actualizarcontenido" method="POST"   action="<?php echo base_url() ?>/admin/slides/actualizarcontenido">
        <input type="text" hidden class="form-control" name="idedit" id="idedit">

          <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="tituloedit" id="tituloedit">
          </div>

          <div class="form-group">
          <label for="">Contenido</label>
           <textarea class="form-control" name="contenidoedit" id="contenidoedit" cols="30" rows="5"></textarea>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-4">
                    
                  </div>
                  <div class="col-md-4"></div>
                  <div class="col-md-2">
                    <button  type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cerrar</button>

                  </div>
                  <div class="col-md-2">
                   
                     <button  form="actualizarcontenido" type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>

                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="eliminarimagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ELIMINAR IMAGEN</h5>
                    
                </div>
                <div class="modal-body">¿Estas seguro de eliminar esta imagen?
                   <form id="formeliminar" action="<?php echo base_url() ?>/admin/slides/eliminar" method="post">
                     <input hidden class="form-control" type="text" name="ideliminar" id="ideliminar">
                     <input hidden class="form-control" type="text" name="public_id" id="public_id">
                   </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button form="formeliminar" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar imagen</button>
                </div>
            </div>
        </div>
</div>





<script>

function mdlModificarImagen()
  {
    $('#agregarImagen').modal('show');
    
  }

  function mdlactualizar(id,titulo,contenido)
  {
    $('#actualizarContenido').modal('show');
    $('#idedit').val(id);
    $('#tituloedit').val(titulo);
    $('#contenidoedit').val(contenido);
    
  }

  function animacion()
  {
      animacion=document.getElementById("animacion");
      btn=document.getElementById("enviar");
      btn2=document.getElementById("cancelar");
      img=document.getElementById("imagensubir");
      
      $('#original').click();
      animacion.removeAttribute("hidden");
      btn.setAttribute("disabled","");
      btn2.setAttribute("disabled","");
      img.setAttribute("disabled","");
    
  }

  function mdlEliminarImagen(id,publicid)
  {
    $('#eliminarimagen').modal('show');
    $('#ideliminar').val(id);
    $('#public_id').val(publicid);
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
