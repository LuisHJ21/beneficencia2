
      <footer class="page-foot bg-ebony-clay">
        <div class="section-40 section-md-60">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-4 col-sm-12 mb-5">
                <h4>Nuestra Ubicacion</h4>
               
                  <p class="text-uppercase" style="color:#fff;">Carretera Paita - Sullana</p>
                  <p class="mt-1" style="color:#fff;letter-spacing: 2px;">KM 1 Mz "Y" Lt 2 - PAITA</p>
               
                
              </div>
              <div class="col-md-4 col-sm-12 mb-5">
                <h4>Contactanos</h4>
                <p style="font-size:20px;color:#fff;"><i class="fas fa-phone"></i> 960293503</p>
              </div>
              <div class="col-md-4 col-sm-12 mb-5">
                <h4>Siguenos en Nuestras Redes</h4>
                <ul class="list-inline list-inline-reset">
                    <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-lg-smaller fab fa-facebook-f" target="_blank" href="https://web.facebook.com/beneficencia.depaita"></a></li>
                    <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-lg-smaller fab fa-whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=51960293503"></a></li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr>
        </div>
        <div class="section-35">
          <div class="container text-center">
            <div class="row row-15 flex-md-row-reverse justify-content-md-between align-items-md-center">
              
              <div class="col-md-12 text-center">
                <p class="rights text-white"><span class="copyright-year"></span><span>&nbsp;&#169;&nbsp;</span><span>LawExpert.&nbsp; All Rights Reserved.</span>Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>/js/core.min.js"></script>
    <script src="<?php echo base_url()?>/js/script.js"></script>

   
    <script src="<?php echo base_url() ?>/owlcarousel/owl.carousel.min.js"></script>

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

<script>
    
    $(".owl-carousel").owlCarousel(
      {
        stagePadding: 50,
              loop:true,
              margin:10,
              nav:false,
              dots:false,
              responsive:{
                  0:{
                      items:1,
                     
                  },
                  600:{
                      items:3

                  },
                1000:{
                      items:3
                  }
              }
          }
      );
</script>


  </body>



</html>


