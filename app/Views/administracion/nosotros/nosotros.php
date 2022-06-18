<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="text-center"><i class="fas fa-file-alt"></i> Historia de la Institucion</h4>
            </div>
            <div class="card-body" >
            <div class="alert alert-success" role="alert">
                <i class="fas fa-check"></i> Los cambios se han guardado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-times"></i> Ha ocurrido un error en la actualizacion de datos.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="">
                    <div class="form-group">
                        <textarea class="summernote" name="histora" id="histora" required maxlength=2000></textarea>  
                    </div>
                    <div>
                        <hr>
                    </div>
                   <div class="form-group" style="margin-bottom: 0px !important;">
                    <div class="row justify-content-end">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
                            </div>
                        </div>
                   </div>
                   
                </form>
               

            </div>
        </div>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col-md-6">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="text-center"><i class="fas fa-eye"></i> Vision</h4>
            </div>
            <div class="card-body">
            <div class="alert alert-success" role="alert">
                <i class="fas fa-check"></i> Los cambios se han guardado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger" role="alert">
            <i class="fas fa-times"></i> Ha ocurrido un error en la actualizacion de datos.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="">
                    <div class="form-group">
                        <textarea class="summernote" name="vision" id="vision" required maxlength=2000></textarea> 
                    </div>
                    <div>
                        <hr>
                    </div>
                   <div class="form-group" style="margin-bottom: 0px !important;">
                    <div class="row justify-content-end">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
                            </div>
                        </div>
                   </div>

                </form>
                 
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="text-center"><i class="fas fa-book"></i> Mision</h4>
            </div>
            <div class="card-body">
            <div class="alert alert-success" role="alert">
                <i class="fas fa-check"></i> Los cambios se han guardado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-times"></i> Ha ocurrido un error en la actualizacion de datos.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="">
                    <div class="form-group">
                        <textarea class="summernote" name="mision" id="mision" required maxlength=2000></textarea> 
                    </div>
                    <div>
                        <hr>
                    </div>
                   <div class="form-group" style="margin-bottom: 0px !important;">
                    <div class="row justify-content-end">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
                            </div>
                        </div>
                   </div>
                

                </form>
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
</script>

