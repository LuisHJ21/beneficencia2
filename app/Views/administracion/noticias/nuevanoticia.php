<?php $session=session(); ?>
<div class="container pt-5 pb-3">

<div class="titulo"><h1 class="text-center">Nueva Noticia</h1></div>

<div class="contenido">

    <?php if($session->success){ ?>

    <div class="alert alert-success" role="alert">
      <i class="fas fa-check"></i> Nueva Noticia Registrada Correctamente.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>

    <?php if($session->error){ ?>
    <div class="alert alert-danger" role="alert">
      <i class="fas fa-times"></i> Ha ocurrido un error en el Registro.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>
        <form id="registrarNoticia" action="<?php echo base_url() ?>/admin/noticias/agregar/registrar" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="imagensubir">Imagen Principal:</label>
            <input onchange="return fileValidation()" accept=".jpeg,.jpg,.png"  type="file" class="form-control-file" name="imagensubir" id="imagensubir" required>
          </div>
          <span>*Solo formato .JPG, JPEG y PNG</span>

          <div class="form-group">
            <label for="titulo">Titulo:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" minlength="3" maxLength="100" required>
          </div>

          <div class="form-group">
            <label for="contenido">Contenido:</label>
            <textarea class="summernote" name="contenido" id="contenido" minlength="3" required maxlength=5000></textarea>  
          </div>

          <div class="row justify-content-end">
              <div class="col-md-4">
              <button type="submit"  class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>

              </div>
          </div>


        </form> 


</div>


</div>




<script>


  $('.summernote').summernote({
        placeholder: '....',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
        ],
        tabsize: 2,
        height: 400,
        maxHeight: 400,
        lang: 'es-ES'
      });


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