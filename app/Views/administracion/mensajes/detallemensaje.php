<!-- Main content -->
<section class="content pt-5">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
        <div class="col-md-12   ">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title"><a class="texto-secundario" href="<?php echo base_url() ?>/admin/mensajes"><i class="fas fa-chevron-left mr-2"></i>Regresar</a></h3>

              
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info px-4">
                <h5 class="mb-3"><?php echo $mensaje['asunto'] ?></h5>
                <h6>De: <?php echo $mensaje['correo_envia'].' - '.$mensaje['nombre_envia'] ?>
                  <span class="mailbox-read-time float-right">
                  <?php 
                  setlocale(LC_TIME, 'spanish');
                   $date = new DateTime($mensaje['creado']); 
                   $fecha = strftime("%d %b %Y ", $date->getTimestamp()); echo $fecha.' '.date_format($date, 'G:i A');
                   ?>
                  </span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              
              <div class="mailbox-read-message px-4 pt-4" style="min-height:400px">
                
                <?php echo $mensaje['mensaje'] ?>

              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
           
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->