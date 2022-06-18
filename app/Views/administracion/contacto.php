<?php $session=session(); ?>
   
   <div class="row mb-2">
            
    </div>
</div><!-- /.container-fluid -->
</section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center mb-0">Datos de Contacto</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">

                                <img src="<?php echo base_url() ?>/images/beneficencia.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-12 col-md-6">
                                <form id="formcontacto" name="formcontacto" action="<?php echo base_url() ?>/admin/nosotros/contacto/guardar" method="post" autocomplete="off">
                                    <div class="form-group">
                                        <label for="">Numero de Celular </label>
                                        <input disabled type="text" class="form-control" name="numero" id="numero" maxlength=9 placeholder="<?php $mensaje='No hay Telefono Registrado';  echo ($nosotros['telefono'] ) ?  $nosotros['telefono'] :  $mensaje ?> " value="<?php echo  $nosotros['telefono'] ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Correo Electronico </label>
                                        <input disabled type="email" class="form-control" name="correo" id="correo" placeholder="<?php $mensaje='No hay Correo Registrado';  echo ($nosotros['correo'] ) ?  $nosotros['correo'] :  $mensaje ?> " value="<?php echo  $nosotros['correo'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Direccion </label>
                                        <input disabled type="text" class="form-control" name="direccion" id="direccion" placeholder="<?php $mensaje='No hay direccion Registrada';  echo ($nosotros['direccion'] ) ?  $nosotros['direccion'] :  $mensaje ?> " value="<?php echo  $nosotros['direccion'] ?>" >
                                    </div>
                                </form>

                                <hr>

                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <?php if($session->success){ ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <?php echo $session->success; ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php }?>

                                        <?php if($session->error){ ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?php echo $session->error; ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button type="button" onClick="actualizar()" class="btn btn-block btn-primary" id="btnupdate" name="btnupdate"><i class="fas fa-pencil-alt mr-1"></i> Actualizar</button>
                                        <button type="button"onClick="cancelar()"  hidden class="btn btn-block btn-danger mt-0" id="btncancel" name="btncancel"><i class="fas fa-times mr-1"></i>Cancelar</button>

                                    </div>

                                

                                    <div class="col-12 col-md-6">
                                        <button form="formcontacto" hidden type="submit" class="btn btn-block btn-success" id="btnchange" name="btnchange"><i class="fas fa-save mr-1"></i>Guardar Cambios</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    function actualizar()
    {
        var btnupdate=document.getElementById("btnupdate");
        var btnchange=document.getElementById("btnchange");
        var btncancel=document.getElementById("btncancel");

        var txtnumero=document.getElementById("numero");
        var txtcorreo=document.getElementById("correo");
        var txtdireccion=document.getElementById("direccion");

        btnupdate.setAttribute("hidden","");

        btnchange.removeAttribute("hidden");
        btncancel.removeAttribute("hidden");

        txtnumero.removeAttribute("disabled");
        txtcorreo.removeAttribute("disabled");
        txtdireccion.removeAttribute("disabled");

    }


    function cancelar()
    {
        var btnupdate=document.getElementById("btnupdate");
        var btnchange=document.getElementById("btnchange");
        var btncancel=document.getElementById("btncancel");

        var txtnumero=document.getElementById("numero");
        var txtcorreo=document.getElementById("correo");
        var txtdireccion=document.getElementById("direccion");

        btnupdate.removeAttribute("hidden");

        btnchange.setAttribute("hidden","");
        btncancel.setAttribute("hidden","");

        txtnumero.setAttribute("disabled","");
        txtcorreo.setAttribute("disabled","");
        txtdireccion.setAttribute("disabled","");

    }




</script>

