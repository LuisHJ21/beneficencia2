<?php $session=session(); ?>
<div class="container pt-5">
    <div class="titulo">
        <h1 class="text-center">Nuevo Usuario del Sistema</h1>
    </div>

    <?php if($session->success){ ?>
    <div class="alert alert-success" role="alert">
      <i class="fas fa-check"></i> Nuevo Usuario Registrado Correctamente.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>

    <?php if($session->error){ ?>
    <div class="alert alert-danger" role="alert">
    <i class="fas fa-times"></i> Ha ocurrido un error en el Registro. <?php echo $error; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>

    <div class="contenido">
        <form id="registrarUsuario" action="<?php echo base_url() ?>/admin/usuarios/agregar/registrar" method="post" autocomplete="off">


        <div class="row">

            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="nombre_user">Nombre de Usuario:</label>
                    <input type="text" onkeypress="return usuario(event);" onkeyup="verificar_usuario()" class="form-control" name="nombre_user" id="nombre_user" minlength="5" maxLength="50" required>
                </div>
                <div hidden="true" class="alert alert-danger" id="userno" role="alert">
                    <i class="fas fa-times"></i> Usuario ya se encuentra en uso.
                </div>

            </div>

            <div class="col-sm-12 col-md-6">

                <div class="form-group">
                    <label for="genero">Sexo:</label>
                    <select class="form-control" name="genero" id="genero" required>
                        <option selected value="0">Escoja un Genero</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div hidden="true" class="alert alert-danger" id="sexno" role="alert">
                    <i class="fas fa-times"></i> Debe escoger un genero.
                </div>
            
            </div>
            

            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="nombres">Nombres:</label>
                    <input type="text" onkeypress="return soloLetras(event)" class="form-control" name="nombres" id="nombres" minlength="3" maxLength="100" required>
                </div>
            
            </div>


            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" onkeypress="return soloLetras(event)" class="form-control" name="apellidos" id="apellidos" minlength="3" maxLength="100" required>
                </div>
            
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="contraseña1">Contraseña:</label>
                    <input type="password"  class="form-control" name="pass1" id="pass1" minlength="3" maxLength="100" required>
                </div>
            
            </div>

            <div class="col-sm-12 col-md-6">
            
                <div class="form-group">
                    <label for="contraseña2">Confirme Contraseña:</label>
                    <input type="password" class="form-control" name="pass2" id="pass2" minlength="5" maxLength="100" required>
                </div>
            
            </div>

        
        </div>

          

      
          
          <div hidden="true" class="alert alert-danger" id="passno" role="alert">
            <i class="fas fa-times"></i> Las Contraseñas no coinciden.
            
          </div>

         


          

          <div class="row justify-content-end">
              <div class="col-md-4">

              <button id="registrar" <?php echo "onclick='verificar_pass()'" ?> type="button"  class="btn btn-success btn-block"><i class="fas fa-save"></i> Registrar</button>
              <button hidden id="registraroriginal"  type="submit"  class="btn btn-success btn-block"><i class="fas fa-save"></i> Registrar</button>

              
              </div>
          </div>
        </form>
    </div>
</div>



<script>

function verificar_pass()
{

    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var formulario = document.getElementById('registrarUsuario');
    var alerta=document.getElementById("passno");
    var alerta2=document.getElementById("sexno");
    var sexo=document.getElementById("genero");

    if(pass1.value == pass2.value && sexo.value!=0 )
    {
       $('#registraroriginal').click();
        alerta.setAttribute("hidden","true");
        alerta2.setAttribute("hidden","true");
    }
    else if(pass1.value != pass2.value) { 
        alerta.removeAttribute("hidden");
    }
    if(sexo.value==0)
    {
        alerta2.removeAttribute("hidden");
    }
    if(pass1.value == pass2.value) { 
        alerta.setAttribute("hidden","true");
    }
    if(sexo.value!=0)
    {
        alerta2.setAttribute("hidden","true");
    }

}

function verificar_usuario()
{

    var usuario=document.getElementById("nombre_user");
    var alerta=document.getElementById("userno");

    $.ajax({

        url:'<?php echo base_url() ?>/admin/usuarios/agregar/validarusuario/'+usuario.value,
        dataType:'json',
        success:function(result){
            var resultados=result.datos.length;

            if(resultados>0)
            {
                alerta.removeAttribute("hidden");
            }
            else{
                alerta.setAttribute("hidden","true");
            }
        }
    });


}


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


function usuario(e){
		key = e.keyCode ? e.keyCode : e.which;
		 if(key>= 97 && key<=122){return true;}else if (key>= 65 && key<=90 ){return true;} else if (key>= 48 && key<=57 ){return true;} else if(key>= 97 && key<=122){return true;} else if(key==127) {return true;}else{return false;}
}




  




</script>