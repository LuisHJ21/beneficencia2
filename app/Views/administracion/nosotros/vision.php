<?php $session=session(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="card mt-4">
                <div class="card-header">
                    <h4 class="text-center"><i class="fas fa-eye"></i> Vision</h4>
                </div>
                <div class="card-body">

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

                    <form action="<?php echo base_url() ?>/admin/nosotros/vision/guardar" method="post">
                        <div id="texto" class="form-group text-justify">
                            <?php echo $nosotros['vision'] ?>
                        </div>
                    
                        <div class="form-group">
                            <textarea class="summernote" name="vision" id="vision" required maxlength=2000></textarea> 
                        </div>
                        <div>
                            <hr>
                        </div>
                    <div class="form-group" style="margin-bottom: 0px !important;">
                            <div class="row justify-content-betwwen">
                                    <div class="col-md-4">
                                        <button id="btneditar" type="button" <?php echo "onclick='editar(`".$nosotros['vision']."`)'"; ?> class="btn btn-primary btn-block"><i class="fas fa-pencil-alt"></i> Editar</button>
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






</script>
