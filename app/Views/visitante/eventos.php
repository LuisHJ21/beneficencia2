<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(images/bg-image-1.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Eventos</h2>
          </div>
        </div>
</section>


<!-- seccion de eventos -->
<section class="section-50 section-md-75 section-xl-100">
        <div class="container">
          <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">

            <?php foreach($eventos as $eve): ?>
              <?php $fecha=$eve['fecha']; ?>
              <?php $hora=$eve['hora']; ?>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-4">
              <div class="event-item" <?php echo "onclick='mdldetalles(\"".$con=date('d-m-Y',strtotime($fecha))."\",\"".$con=date('h:i A',strtotime($hora))."\",\"".$eve['lugar']."\")'" ;?> style="cursor: pointer">
                <div class="event-image">
                  <img style="height:196px" src="<?php echo $eve['imagen'] ?>" alt="">
                </div>
                <div class="event-info" >
                  <div class="date">
                    <span>
                      <span class="day"><?php $con=date('d',strtotime($fecha)); echo $con; ?></span>
                      <span class="month"><?php $con=date('M',strtotime($fecha)); echo $con; ?></span>
                    </span>
                  </div>
                  <div class="event-content ">
                    <h6><a href="#"><?php echo $eve['nombre'] ?></a></h6>
                    <ul class="event-meta">
                      <li><i class="icons icon-clock"></i> <?php $con=date('h:i A',strtotime($hora)); echo $con ; ?></li>
                      <li><i class="icons icon-location"></i> <?php echo $eve['lugar'] ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          

           
          
          </div>
        </div>
</section>



<div id="detallesevento" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Datos del Evento</h5>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              
              <th scope="col">Fecha</th>
              <th scope="col">Hora</th>
              <th scope="col">Lugar</th>
            </tr>
          </thead>
          <tbody id="datosevento">
           
           
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <div class="container-fluid">
          <div class="row justify-content-end">
            <div class="col-sm-4">
            <button type="button" onclick="limpiardetalle()" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</div>


<script>

  function mdldetalles(fecha,hora,lugar)
  {
    

    var fila="<tr><td>" +
    fecha + "</td><td>" +
    hora + "</td><td>"+
    lugar + "</td></tr>";

    $("#datosevento").append(fila);
    $("#detallesevento").modal('show');

  }

 
  function limpiardetalle()
  {
    var node = document.getElementById("datosevento");
    while (node.hasChildNodes()) {
    node.removeChild(node.lastChild);
    }
  }

</script>
