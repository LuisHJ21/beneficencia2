<div class="div-historia bg-gray-dark " >
  <img src="<?php echo base_url() ?>/images/beneficencia.jfif" alt="" class="h-100 w-100">
        <div class="container container-historia" style="position:absolute">
          <div class="page-title">
            <h2>Miembros del Directorio</h2>
          </div>
        </div>
</div>

<section class="section-60 section-lg-100">
        <div class="container">
       
          <div class="row row-40 align-items-sm-end">

          <?php if(count($directorio)==0){ ?>

            <div class="col-12">
                <h4 class="text-center text-secondary">No Hay Miembros Registrados</h4>
            </div>


            <?php  } ?>


            <?php foreach($directorio as $dir): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">

                  

                  <figure class="thumbnail-image"><img src="<?php if(!$dir['imagen']){echo base_url('/images/no-imagen-directorio.jpg');}else{echo $dir['imagen'];}  ?>" alt="" style="width: 100%;!important" width="246" height="300"/>
                  </figure>
                  <!-- <div class="thumbnail-inner">
                    
                  </div> -->
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#"><?php $nombrecompleto=$dir['nombres'].' '.$dir['apellidos']; $conv=strtoupper($nombrecompleto); echo $conv; ?></a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption"><?php $cargo=strtoupper($dir['cargo'] ); echo $cargo; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>

            

           
           
          </div>
        </div>
</section>
