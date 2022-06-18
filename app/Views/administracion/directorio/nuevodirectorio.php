<?php $session=session(); ?>
<div class="container pt-5">
    <div class="titulo">
        <h1 class="text-center">Nuevo Miembro del Directorio</h1>
    </div>


    <?php if($session->success){ ?>
    <div class="alert alert-success" role="alert">
      <i class="fas fa-check"></i> Nuevo Miembro Registrado Correctamente.
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


    <div class="contenido">
        <form id="registrarMiembro" action="<?php echo base_url() ?>/admin/directorio/agregar/registrar" method="post">



          <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input type="text" class="form-control" onkeypress="return soloLetras(event)" name="nombres" id="nombres" minlength="3" maxLength="100" required>
          </div>

         

          <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" onkeypress="return soloLetras(event)" name="apellidos" id="apellidos" minlength="3" maxLength="100" required>
          </div>

          

          <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" class="form-control" onkeypress="return soloLetras(event)" name="cargo" id="cargo" minlength="5" maxLength="50" required>
          </div>

          

          <div class="row justify-content-end">
              <div class="col-md-4">

              <button type="submit"  class="btn btn-success btn-block"><i class="fas fa-save"></i> Registrar</button>

              
              </div>
          </div>
        </form>
    </div>
</div>



<script>


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