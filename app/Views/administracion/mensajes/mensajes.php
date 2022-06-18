
 
<div class="row mb-2">
          <div class="col-sm-6 pt-4 pb-4">
            <h1>Mensajes</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content ">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 ">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Mensajes</h3>

              <div class="card-tools">
                
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              
              <div class="table-responsive  mailbox-messages">
                <table class="table" id="example1">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Enviado Por</th>
                      <th>Asunto</th>
                      <th>Fecha</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php if(count($mensajes)==0) { ?>

                  <tr>
                    <td colspan="4" class="text-center">No hay Mensajes</td>
                  </tr>

                  <?php } ?>

                  <?php foreach($mensajes as $men): ?>
                  <tr style="cursor:pointer;" class='clickable-row <?php if($men['estado']=="no leido"){ echo 'font-weight-bold';} ?>' data-href='<?php echo base_url() ?>/admin/mensajes/detalle/<?php echo $men['id']?>'>
                   
                    <td class="mailbox-star">
                      <?php if($men['estado']=="no leido") { ?>
                      <i  class="fas fa-circle texto-secundario"></i>
                      <?php } ?>
                    </td>
                    <td class="mailbox-name texto-secundario  text-uppercase"><?php echo $men['nombre_envia'] ?></td>
                    <td class="mailbox-subject "><?php echo $men['asunto'] ?></td>
                   
                    <td class="mailbox-date  text-uppercase"><?php setlocale(LC_TIME, 'spanish'); $date = new DateTime($men['creado']); $fecha = strftime("%d %b", $date->getTimestamp()); echo $fecha; ?></td>

                  </tr>
                  
                  <?php endforeach; ?>
                  
                  
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
           
          </div>
          <!-- /.card -->
        </div>
    </div>


    <script>

jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
    </script>