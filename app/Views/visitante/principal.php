

      <!-- seccion de slide -->
      <section>

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php if(count($slides)==0){ ?>
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

            <?php } ?>
          <?php $cont=0; foreach($slides as $slide): ?>
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="<?php if($cont==0){echo 'active'; }?>"></li>
            <?php $cont+=1; endforeach; ?>
          </ol>
          <div class="carousel-inner">

          <?php if(count($slides)==0){ ?>

            <div class="carousel-item active">
              <img src="<?php echo base_url() ?>/images/bg-image-1.jpg" class="d-block w-100 img-fluid" alt="..." style="height: 500px;">
              <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0,0,0,.25)">
                <h5 class="text-white">Titulo</h5>
                <p>Descripcion</p>
              </div>
            </div>


            <?php } ?>

            <?php $cont=0; foreach($slides as $slide): ?>
            <div class="carousel-item <?php if($cont==0){echo 'active'; }?>">
              <img src="<?php echo $slide['imagen'] ?>" class="d-block w-100 img-fluid" alt="..." style="height: 500px;">
              <div class="carousel-caption <?php if(!$slide['titulo'] && !$slide['contenido']){echo 'd-none';} else{echo 'd-block';} ?>" style="background-color:rgba(0,0,0,.25)">
                <h5 class="text-white"><?php echo $slide['titulo'] ?></h5>
                <p><?php echo $slide['contenido'] ?></p>
              </div>
            </div>
            
            <?php $cont+=1; endforeach; ?>


          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        


      </section>

    

     
      <!-- seccion de noticias -->
      <section class="section-50 noticias-section">
        <div class="container">
          <h3 class="text-center titulo-principal">Ultimas Noticias</h3>
          <div class="row row-40 row-offset-1 justify-content-sm-end">

            <?php if(count($noticias)==0){ ?>

            <div class="col-12">
                <h4 class="text-center text-secondary">No Hay Noticias Registradas</h4>
            </div>


            <?php  } ?>


          <?php $i=0; foreach($noticias as $noti):?>
            <div class="col-sm-6 col-md-3  ">
              <article class="post-boxed" style="background-color:<?php if($i%2==0){echo '#D64045';}else{echo '#2274A5';} ?>">
                <div class="post-boxed-image"><img style="height:150px" src="<?php echo $noti['imagen'] ?>" alt="" width="268" />
                </div>
                <div class="post-boxed-body">
                <div class="post-boxed-header">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-20" style="color:#fff;"><?php $fecha=$noti['creado']; $con=date('M d, Y',strtotime($fecha)); echo $con; ?></time>
                      </li>
                    </ul>
                  </div>
                  <div class="post-boxed-title"><a href="#" style="color:#fff;font-size: 14px;"><?php echo $noti['titulo'] ?></a></div>
                  <div class="post-boxed-footer">
                      <div class="contenido-noticia">
                      <?php echo $noti['contenido'] ?>
                        
                      </div>
                      <div class="mt-3">
                      <div class="row justify-content-center">
                          <div class="sm-12 col-md-6"> 
                             <a style="cursor:pointer" href="<?php echo base_url() ?>/noticias/detallenoticia/<?php echo $noti['id_noticia'] ?>" class="btn btn-block btn-outline-danger">Leer mas <i class="fas fa-chevron-right
                          "></i> </a>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </article>
            </div>
            <?php if(++$i==12) break; ?>
            <?php endforeach; ?>

            <div class="col-sm-12 row justify-content-center">
              <div class="col-sm-12 col-md-3">
                <a href="" class="btn btn-secondary btn-block">Ver más Noticias</a>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!-- seccion de eventos -->
      



      <!-- seccion delPersonal -->

      <section class="section-60 ">
        <div class="container mb-3">
       
          <div class="row row-40 align-items-sm-center">

          
          <?php $i=0; foreach($directorio as $dir): ?>
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
            <?php if(++$i==3) break; ?>
            <?php endforeach; ?>
            
            <div class="col-sm-6 col-md-12 col-lg-3 text-center">
              <div class="block-wrap-1">
                <div class="block-number"><i class="fas fa-user-tie"></i></div>
                <h3 class="text-normal titulo-principal">Miembros</h3>
                <p class="h5 h5-smaller text-style-4 titulo-principal">del directorio</p>
               <a class="link link-group link-group-animated link-bold link-secondary" href="<?php echo base_url() ?>/directorio"><span>Ver más.</span><span class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
              </div>
            </div>

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


     

    

      

    
