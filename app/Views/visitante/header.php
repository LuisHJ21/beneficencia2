<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title><?php echo $titulo; ?></title>

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link href="<?php echo base_url() ?>/css/fontawesome-pro/css/all.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url()?>/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic%7CLato:300,300italic,400,400italic,700,900%7CMerriweather:700italic">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/stilos.css"  type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/coloresv.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/owlcarousel/owl.theme.default.min.css">

    
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link rel="stylesheet" href="<?php echo base_url()?>/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"> </div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
        
      <header class="page-head">
        <div class="rd-navbar-wrap" style="height: auto;">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner" style="max-width: 90%;">
              <div class="rd-navbar-aside-wrap">
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                  <div class="rd-navbar-aside-content">
                    <ul class="rd-navbar-aside-group list-units">
                      <!-- <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary material-icons-phone"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="tel:#">+1 (232) 349–8447</a></div>
                        </div>
                      </li> -->
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-body"><i class="fas fa-envelope mr-1"></i><a href="mailto:Sbp_paita@hotmail.com">Sbp_paita@hotmail.com</a> </div>
                        </div>
                      </li>
                    </ul> 
                    <div class="rd-navbar-aside-group" >
                      <ul class="list-inline list-inline-reset">
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fab fa-facebook-f" target="_blank" href="https://web.facebook.com/beneficencia.depaita"></a></li>
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fab fa-whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=51960293503"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-group" style="padding:0px;">
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button><a class="rd-navbar-brand brand d-none d-lg-block" href="<?php echo base_url()?>"><img style="height:88px;" src="<?php echo base_url() ?>/dist/img/logo_beneficencia.png" alt="" width="143" height="27"/></a>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-inner barra">
                    <ul class="rd-navbar-nav" style="margin-right:0px;">
                      <li class="<?php if($titulo=="Inicio"){echo "active";} ?>"><a href="<?php echo base_url() ?>">Inicio</a>
                      </li>
                      <li class="pre-nav <?php if($titulo=="Historia"||$titulo=="Mision-Vision"||$titulo=="Directorio"){echo "active";} ?>"><a class="multi" href="#">Nosotros <span  class=" flechita-nosotros fas fa-chevron-down"></span></a>
                        <ul class="nav-detalle" style="">
                          <li class="<?php if($titulo=="Historia"){echo "submenuactivo";} ?>"><a style="" href="<?php echo base_url() ?>/historia">Nuestra Historia</a></li>
                          <li class="<?php if($titulo=="Mision-Vision"){echo "submenuactivo";} ?>"><a style="" href="<?php echo base_url() ?>/visionymision">Mision y Vision</a></li>
                          <li class="<?php if($titulo=="Directorio"){echo "submenuactivo";} ?>"><a style="" href="<?php echo base_url() ?>/directorio">Miembros del Directorio</a></li>
                        </ul>
                      </li> 
                      <li class="pre-nav <?php if($titulo=="SERFIN"||$titulo=="Nichos"){echo "active";} ?>"><a class="multi" href="#">Servicios <span  class=" flechita-nosotros fas fa-chevron-down"></span></a>
                        <ul class="nav-detalle" style="">
                          <li class="<?php if($titulo=="Nichos"){echo "submenuactivo";} ?>"><a style="" href="<?php echo base_url()?>/nichos">Nichos</a></li>
                          <li class="<?php if($titulo=="SERFIN"){echo "submenuactivo";} ?>"><a style="" href="<?php echo base_url()?>/serfin">SERFIN</a></li>
                        </ul>
                      </li>
                      
                      <li class="<?php if($titulo=="Noticias"){echo "active";} ?>"><a href="<?php echo base_url() ?>/noticias">Noticias</a>
                      </li>
                     

                      <li class="<?php if($titulo=="Contacto"){echo "active";} ?>"><a href="<?php echo base_url() ?>/contacto">Contacto</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>