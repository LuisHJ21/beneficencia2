<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(<?php echo base_url() ?>/images/nicho.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Nichos</h2>
          </div>
        </div>
</section>

      <section class="section-66 section-md-90 section-xl-bottom-120">
        <div class="container-fluid padding-emergenci">
            <div class="row">

            <div class="col-12 col-md-6 pb-5">
                <h4 class="color-principal text-center">Nichos Reservados en Vida</h4>
                <div class="tabla table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col">Nivel</th>
                            <th scope="col">Precio S/.</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php foreach($nichosv as $n): ?>
                            <tr>
                            <th scope="row"><?php echo $n['nivel'] ?></th>
                            <td><?php echo $n['precio'] ?></td>
                            </tr>
                            <?php endforeach; ?>  
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-md-6 pb-5">


            <img src="<?php if(!$servicio['imagen']){echo base_url('/images/no-imagen.jpg');}else{echo $servicio['imagen'];}  ?>" alt="" class="img-fluid h-100">               
            </div>
            <div class="col-12 col-md-6 pb-5">
                <h4 class="color-principal text-center">Nichos Parvulos</h4>
                <div class="tabla table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col">Nivel</th>
                            <th scope="col">Precio S/.</th>
                            
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach($nichosp as $n): ?>
                            <tr>
                            <th scope="row"><?php echo $n['nivel'] ?></th>
                            <td><?php echo $n['precio'] ?></td>
                            </tr>
                            <?php endforeach; ?> 
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-md-6 pb-5">
                <h4 class="color-principal text-center">Nichos Adultos</h4>
                <div class="tabla table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col">Nivel</th>
                            <th scope="col">Precio S/.</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($nichosa as $n): ?>
                            <tr>
                            <th scope="row"><?php echo $n['nivel'] ?></th>
                            <td><?php echo $n['precio'] ?></td>
                            </tr>
                            <?php endforeach; ?> 
                        </tbody>
                    </table>
                </div>
            </div>
          
            </div>
        </div>
      </section>
