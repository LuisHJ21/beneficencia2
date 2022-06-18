<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(<?php echo base_url() ?>/images/apoyo1.png);">
        <div class="container">
          <div class="page-title">
            <h2>Historia</h2>
          </div>
        </div>
</section>

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
