<div class="div-historia bg-gray-dark " >
  <img src="<?php echo base_url() ?>/images/apoyo3.png" alt="" class="h-100 w-100">
        <div class="container container-historia" style="position:absolute">
          <div class="page-title">
            <h2>Noticias</h2>
          </div>
        </div>
</div>
 <!-- seccion de noticias -->
 <section class="section-50 section-md-75 section-xl-100 noticias-section">
        <div class="container">
          <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">

          <?php if(count($noticias)==0){ ?>

          <div class="col-12">
              <h4 class="text-center text-secondary">No Hay Noticias Registradas</h4>
          </div>
          

          <?php  } ?>

          <?php $i=0;   foreach($noticias as $noti):?>
            <div class="col-sm-9 col-md-6 col-lg-4 ">
              <article class="post-boxed" style="background-color:<?php if($i%2==0){echo '#D64045';}else{echo '#2274A5';} ?>">
                <div class="post-boxed-image"><img style="height:220px" src="<?php echo $noti['imagen'] ?>" alt="" width="268" />
                </div>
                <div class="post-boxed-body">
                <div class="post-boxed-header">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-20"><?php $fecha=$noti['creado']; $con=date('M d, Y',strtotime($fecha)); echo $con; ?></time>
                      </li>
                    </ul>
                  </div>
                  <div class="post-boxed-title"><a style="color:#fff;font-size: 14px;" href="#"><?php echo $noti['titulo'] ?></a></div>
                  <div class="post-boxed-footer">
                      <div class="contenido-noticia">
                      <?php echo $noti['contenido'] ?>
                        
                      </div>
                      <div class="mt-3">
                        <div class="row justify-content-center">
                          <div class="sm-12 col-md-4"> 
                             <a style="cursor:pointer" href="<?php echo base_url() ?>/noticias/detallenoticia/<?php echo $noti['id_noticia'] ?>" class="btn btn-block btn-outline-danger">Leer mas <i class="fas fa-chevron-right
"></i> </a>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </article>
            </div>
         
            <?php $i+=1; endforeach; ?>


          </div>
        </div>
</section>
