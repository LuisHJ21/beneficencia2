
<?php $session=session(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="card mt-4">
                <div class="card-header">
                    <h4 class="text-center"><i class="fas fa-file-alt"></i> Historia de la Institucion</h4>
                </div>
                <div class="card-body" >
                <?php if($session->success){ ?>
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check"></i> Los cambios se han guardado correctamente.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>

                <?php if($session->error){ ?>

                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-times"></i> Ha ocurrido un error en la actualizacion de datos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php } ?>


                    <form action="<?php echo base_url() ?>/admin/nosotros/historia/guardar" method="post">
                        <div id="texto" class="form-group text-justify">
                            <?php echo $nosotros['historia'] ?>
                        </div>
                        <div id="summer"  class="form-group">
                            <textarea   class="summernote" name="histora" id="histora" required maxlength=2000></textarea>  
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="form-group" style="margin-bottom: 0px !important;">
                            <div class="row justify-content-betwwen">
                                    <div class="col-md-4">
                                        <button id="btneditar" type="button" <?php echo "onclick='editar(`".$nosotros['historia']."`)'"; ?> class="btn btn-primary btn-block"><i class="fas fa-pencil-alt"></i> Editar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btncancelar" type="button" onclick="cancelar()" hidden  class="btn btn-secondary btn-block"><i class="fas fa-times"></i> Cancelar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btnguardar" hidden type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
                                    </div>
                            </div>
                        </div>
                    
                    </form>
                

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">

            <div class="card mt-4">
                <div class="card-header text-center">
                   <Strong> Imagen Establecida </Strong>
                </div>
                <div class="card-body">
                <?php if($session->successimg){ ?>
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check"></i> La Imagen Actualizada.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>

                <?php if($session->errorimg){ ?>

                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-times"></i> Error al Actualizar Imagen.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php } ?>


                    <img style="width:100%;height:200px;" src="<?php if(!$nosotros['imagen_historia']){echo base_url('/images/no-imagen.jpg');}else{echo  $nosotros['imagen_historia'];} ?>" alt="">   
               
                </div>

                <div class="card-footer">
                   <div class="row justify-content-end">
                       <div class="col-sm-12 col-md-6">
                           <button onclick="mdlModificarImagen()" type="button" class="btn btn-success btn-block"><i class="fas fa-upload"></i> Cargar Imagen</button>
                       </div>
                   </div>
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
        <h5 class="modal-title" id="exampleModalLabel">Agregar Imagen Historia</h5>
        
      </div>
      <div class="modal-body">
        <form id="subirimagen" method="POST" enctype="multipart/form-data"  action="<?php echo base_url() ?>/admin/nosotros/historia/subirimagen">
          <div class="form-group">
            <input  onchange="return fileValidation()" type="file" class="form-control-file" name="imagensubir" id="imagensubir" accept=".jpeg,.jpg,.png" required>
            <span>*Solo formato .JPG, JPEG y PNG</span>
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


<script>
      $('.summernote').summernote({

        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
        ],
        placeholder: '....',
        tabsize: 2,
        height: 250,
        maxHeight: 250,
        lang: 'es-ES'
      });

      function editar(texto)
      {
          btneditar=document.getElementById("btneditar");
          btnguardar=document.getElementById("btnguardar");
          btncancelar=document.getElementById("btncancelar");

        //   summer=document.getElementById("summer");
        //   texto=document.getElementById("texto");

          btneditar.setAttribute("hidden","");
          btnguardar.removeAttribute("hidden");
          btncancelar.removeAttribute("hidden");

          $('.summernote').summernote('code',texto);
          /* summer.removeAttribute("hidden");
          texto.setAttribute("hidden",""); */

      }

      function cancelar()
      {
        btneditar=document.getElementById("btneditar");
          btnguardar=document.getElementById("btnguardar");
          btncancelar=document.getElementById("btncancelar");

          /* summer=document.getElementById("summer");
          texto=document.getElementById("texto"); */


          btneditar.removeAttribute("hidden");
          btnguardar.setAttribute("hidden","");
          btncancelar.setAttribute("hidden","");

/* 
          summer.setAttribute("hidden","");
          texto.removeAttribute("hidden"); */

          $('.summernote').summernote('code','');
      }



    function mdlModificarImagen()
  {
    $('#agregarImagen').modal('show');
    
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

