<?php $session=session(); ?>

<section class="">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Imagen</h4>
                        

                        <img src="<?php if(!$servicio['imagen']){echo base_url('/images/no-imagen-directorio.jpg');} else {echo $servicio['imagen'] ;}?>" alt="" class="img-fluid">
                        
                        <hr>
                        <?php if($session->successimg ){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $session->successimg?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php } ?>

                        <?php if($session->errorimg){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $session->errorimg?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?>
                        <div class="mt-2">
                            <button onclick="mdlModificarImagen()" class="btn btn-success btn-block"><i class="fas fa-upload mr-1"></i> Subir Imagen</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Servicios a Brindar</h4>
                    </div>
                    <div class="card-body">
                        <?php if($session->success && $session->var=="servicio"){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $session->success?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php } ?>
                        
                        <?php if($session->error && $session->var=="servicio"){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $session->error?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php } ?>


                        <form action="<?php echo base_url() ?>/admin/serfin/guardarservicio" method="post">
                            <div id="texto" class="form-group text-justify">

                                <?php echo $serfin['brinda'] ?>
                            
                            </div>

                            <div id="summer"  class="form-group">
                                <textarea   class="summernote summerservicio" name="servicios" id="servicios" required maxlength=2000></textarea>  
                            </div>

                            <div class="form-group" style="margin-bottom: 0px !important;">
                                <div class="row justify-content-betwwen">
                                    <div class="col-md-4">
                                        <button id="btneditarservicio" type="button" <?php echo "onclick='editarbeneficio(`".$serfin['brinda']."`)'"; ?>  class="btn btn-primary btn-block"><i class="fas fa-pencil-alt"></i> Editar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btncancelarservicio" type="button" onclick="cancelarbeneficio()" hidden  class="btn btn-secondary btn-block"><i class="fas fa-times"></i> Cancelar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btnguardarservicio" hidden type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
                                    </div>
                                </div>
                            </div>

                            




                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Mensualidad</h4>
                    </div>

                    <div class="card-body">
                        <?php if($session->success && $session->var=="mensualidad"){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $session->success?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php } ?>

                        <?php if($session->error && $session->var=="mensualidad"){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $session->error?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php } ?>

                    <form action="<?php echo base_url() ?>/admin/serfin/guardarmensualidad" method="post">
                            <div id="texto" class="form-group text-justify">

                                <?php echo $serfin['mensualidad'] ?>
                            
                            </div>

                            <div id="summer"  class="form-group">
                                <textarea   class="summernote summermensualidad" name="mensualidad" id="mensualidad" required maxlength=2000></textarea>  
                            </div>

                            <div class="form-group" style="margin-bottom: 0px !important;">
                                <div class="row justify-content-betwwen">
                                    <div class="col-md-4">
                                        <button id="btneditarmensualidad" type="button" <?php echo "onclick='editarmensualidad(`".$serfin['mensualidad']."`)'"; ?>  class="btn btn-primary btn-block"><i class="fas fa-pencil-alt"></i> Editar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btncancelarmensualidad" type="button" onclick="cancelarmensualidad()" hidden  class="btn btn-secondary btn-block"><i class="fas fa-times"></i> Cancelar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btnguardarmensualidad" hidden type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
                                    </div>
                                </div>
                            </div>

                            




                        </form>


                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Requisitos</h4>
                    </div>

                    <div class="card-body">
                        <?php if($session->success && $session->var=="requisitos"){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $session->success?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php } ?>

                        <?php if($session->error && $session->var=="requisitos"){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $session->error?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php } ?>
                    <form action="<?php echo base_url() ?>/admin/serfin/guardarrequisitos" method="post">
                            <div id="texto" class="form-group text-justify">

                                <?php echo $serfin['requisitos'] ?>
                            
                            </div>

                            <div id="summer"  class="form-group">
                                <textarea   class="summernote summerrequisitos" name="requisitos" id="requisitos" required maxlength=2000></textarea>  
                            </div>

                            <div class="form-group" style="margin-bottom: 0px !important;">
                                <div class="row justify-content-betwwen">
                                    <div class="col-md-4">
                                        <button id="btneditarrequisitos" type="button" <?php echo "onclick='editarrequisitos(`".$serfin['requisitos']."`)'"; ?>  class="btn btn-primary btn-block"><i class="fas fa-pencil-alt"></i> Editar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btncancelarrequisitos" type="button" onclick="cancelarrequisitos()" hidden  class="btn btn-secondary btn-block"><i class="fas fa-times"></i> Cancelar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btnguardarrequisitos" hidden type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
                                    </div>
                                </div>
                            </div>

                            




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






  <!-- Modal Agregar Imagen-->
  <div class="modal fade" id="agregarImagen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Imagen </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="subirimagen" method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>/admin/serfin/subirimagen" autocomplete="off">
        <input hidden="true" type="text" class="form-control" id="idagregarimagen" name="idagregarimagen"  required> 
          
          <div class="form-group">
            <input onchange="return fileValidation()" accept=".jpeg,.jpg,.png" type="file" class="form-control-file" id="imagensubir" name="imagensubir" required>
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
                    <button id="imagensubir" onclick="subirimagen()" type="button" class="btn btn-success">Guardar</button>
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


    function mdlModificarImagen()
  {
    $('#agregarImagen').modal('show');
   
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



function editarbeneficio(texto)
      {
          btneditar=document.getElementById("btneditarservicio");
          btnguardar=document.getElementById("btnguardarservicio");
          btncancelar=document.getElementById("btncancelarservicio");

        //   summer=document.getElementById("summer");
        //   texto=document.getElementById("texto");

          btneditar.setAttribute("hidden","");
          btnguardar.removeAttribute("hidden");
          btncancelar.removeAttribute("hidden");

          $('.summerservicio').summernote('code',texto);
          /* summer.removeAttribute("hidden");
          texto.setAttribute("hidden",""); */

      }

      function cancelarbeneficio()
      {
            btneditar=document.getElementById("btneditarservicio");
          btnguardar=document.getElementById("btnguardarservicio");
          btncancelar=document.getElementById("btncancelarservicio");

          /* summer=document.getElementById("summer");
          texto=document.getElementById("texto"); */


          btneditar.removeAttribute("hidden");
          btnguardar.setAttribute("hidden","");
          btncancelar.setAttribute("hidden","");


          $('.summerservicio').summernote('code','');
      }




      
function editarmensualidad(texto)
      {
          btneditar=document.getElementById("btneditarmensualidad");
          btnguardar=document.getElementById("btnguardarmensualidad");
          btncancelar=document.getElementById("btncancelarmensualidad");

        //   summer=document.getElementById("summer");
        //   texto=document.getElementById("texto");

          btneditar.setAttribute("hidden","");
          btnguardar.removeAttribute("hidden");
          btncancelar.removeAttribute("hidden");

          $('.summermensualidad').summernote('code',texto);
          /* summer.removeAttribute("hidden");
          texto.setAttribute("hidden",""); */

      }

      function cancelarmensualidad()
      {
          btneditar=document.getElementById("btneditarmensualidad");
          btnguardar=document.getElementById("btnguardarmensualidad");
          btncancelar=document.getElementById("btncancelarmensualidad");

          /* summer=document.getElementById("summer");
          texto=document.getElementById("texto"); */


          btneditar.removeAttribute("hidden");
          btnguardar.setAttribute("hidden","");
          btncancelar.setAttribute("hidden","");


          $('.summermensualidad').summernote('code','');
      }




      function editarrequisitos(texto)
      {
          btneditar=document.getElementById("btneditarrequisitos");
          btnguardar=document.getElementById("btnguardarrequisitos");
          btncancelar=document.getElementById("btncancelarrequisitos");

        //   summer=document.getElementById("summer");
        //   texto=document.getElementById("texto");

          btneditar.setAttribute("hidden","");
          btnguardar.removeAttribute("hidden");
          btncancelar.removeAttribute("hidden");

          $('.summerrequisitos').summernote('code',texto);
          /* summer.removeAttribute("hidden");
          texto.setAttribute("hidden",""); */

      }

      function cancelarrequisitos()
      {
          btneditar=document.getElementById("btneditarrequisitos");
          btnguardar=document.getElementById("btnguardarrequisitos");
          btncancelar=document.getElementById("btncancelarrequisitos");

          /* summer=document.getElementById("summer");
          texto=document.getElementById("texto"); */


          btneditar.removeAttribute("hidden");
          btnguardar.setAttribute("hidden","");
          btncancelar.setAttribute("hidden","");


          $('.summerrequisitos').summernote('code','');
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