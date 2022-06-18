<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 pt-5">
            <h3 class="text-center">" <?php echo $noticia['titulo'] ?> "</h3>
        </div>
        <div class="col-md-10 detalle-noticia-img pt-5">
            <img class="mb-3" src="<?php echo $noticia['imagen'] ?>" alt="">
            <span>Fecha de Publicación: <?php $fecha=$noticia['creado']; $con=date('d-m-Y',strtotime($fecha)); echo $con; ?></span>
        </div>
        <div class="col-md-10 pb-5 pt-5">
        <?php echo $noticia['contenido'] ?>
        </div>
    </div>

    

    <!-- Set up your HTML -->
    <div class="owl-carousel owl-theme mb-5"  >
        <?php foreach($imagenes as $img): ?>
        <img class="item img-fluid" src="<?php echo $img['imagen'] ?>" alt="">
        <?php endforeach; ?>
       
    </div>





 

</div>


