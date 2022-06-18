<?php $session=session(); ?>
<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(images/contactenos.png);">
        <div class="container">
          <div class="page-title">
            <h2>Contacto</h2>
          </div>
        </div>
</section>

<section class="section-60 section-lg-100">
    <div class="container">
    
       <div class="card informacion-contacto">
           <div class="row">
               <div class="col-12 col-md-6">
                <div class="informacion px-4 py-5 h-100 w-100">
                    <h4 class="text-center">Informacion de Contacto</h4>

                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 px-5 px-md-0">
                            <div class="info text-left">
                                <ul>
                                    <li> <i class="fas fa-map-marker-alt p-3 rounded-circle mr-1"></i> Direccion:</li>
                                    <p class="pl-5 ml-3"><?php echo $nosotros['direccion'] ?></p>
                                    <li> <i class="fas fa-envelope p-3 rounded-circle mr-1"></i> Correo:</li>
                                    <p class="pl-5 ml-3"><?php echo $nosotros['correo'] ?></p>
                                    <li> <i class="fas fa-phone p-3 rounded-circle mr-1"></i> Numero:</li>
                                    <p class="pl-5 ml-3"><?php echo $nosotros['telefono'] ?></p>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
               </div>
               <div class="col-12 col-md-6">
                <div class="formulario px-4 py-5">
                    <h4 class="text-center">Envianos un Mensaje</h4>
                    <form action="<?php echo base_url() ?>/contacto/enviarmensaje" name="form-mensaje" id="form-mensaje" method="post" autocomplete="off">
                       <div class="form-group">
                           <label for="nombre">Nombre:(*)</label>
                           <input type="text" name="nombre" id="nombre" class="form-control form-control-lg" required>
                       </div>

                       <div class="form-group">
                           <label for="correo">Correo:(*)</label>
                           <input type="email" name="email" id="email" class="form-control form-control-lg" required>
                       </div>

                       <div class="form-group">
                           <label for="asunto">Asunto:</label>
                           <input type="text" name="asunto" id="asunto" class="form-control form-control-lg" required>
                       </div>

                       <div class="form-group">
                           <label for="mensaje">Mensaje:(*)</label>
                           <textarea style="font-size:14px;" class="form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                       </div>
                       <span>(*) Campos Obligatorios</span>
                    </form>
                    <button type="submit" form="form-mensaje" class="btn btn-block btn-primary my-3"><i class="fas fa-envelope pr-3"></i> Enviar Mensaje</button>

                    <?php if($session->success) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <i class="fas fa-check mr-1"></i> <?php echo $session->success; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>

                    <?php if($session->error) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <i class="fas fa-times mr-1"></i> <?php echo $session->error; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>
                </div>
                   
               </div>
           </div>
       </div>
    
    </div>
</section>
