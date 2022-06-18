<div class="div-historia bg-gray-dark " >
  <img src="<?php echo base_url() ?>/images/apoyo1.png" alt="" class="h-100 w-100">
        <div class="container container-historia" style="position:absolute">
          <div class="page-title">
            <h2>Historia</h2>
          </div>
        </div>
</div>

      <section class="section-66 section-md-90 section-xl-bottom-120">
        <div class="container">
          <div class="row">
          <div class="col-md-8">
          <h3>Nuestra Historia</h3>

          <div class="historia" style="text-align:justify;">
          <?php echo $nosotros['historia'] ?>
          </div>

          </div>
          <div class="col-md-4" style="margin-top:8rem !important;">
          
            <img style="height:450px;" src="<?php if(!$nosotros['imagen_historia']){echo base_url('/images/no-imagen.jpg');}else{echo  $nosotros['imagen_historia'];} ?>" alt="">
            
          </div>
        </div>
          </div>
      </section>
