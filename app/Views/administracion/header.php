<?php $session=session(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <?php 
    
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $titulo; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/coloresadm.css" type="text/css">
  <link rel="icon" href="<?php echo base_url()?>/images/favicon.ico" type="image/x-icon">

  <!-- Font Awesome -->
  <link href="<?php echo base_url() ?>/css/fontawesome-pro/css/all.css" rel="stylesheet"> 

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/stilosadmin.css"  type="text/css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

  <script src="<?php echo base_url() ?>/js/summernote-es-ES.js"></script>
  
  <!-- summernote -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url() ?>/dist/img/logo_beneficencia.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light navbar-up">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><?php echo $titulo; ?></a>
      </li>
      
    </ul>

   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>/admin" class="brand-link">
      <img src="<?php echo base_url() ?>/dist/img/logo_beneficencia.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SB Paita</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>/dist/img/<?php if($session->sexo=="M"){echo "user-m.jpg";}else{ echo "user-f.jpg";} ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $session->nombres.' '.$session->apellidos ;?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="<?php echo base_url() ?>/admin/dashboard" class="nav-link <?php if($titulo=="DashBoard") {echo "active"; }?>">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                DASHBOARD    
              </p>
            </a>
          </li>


          <li class="nav-header">Administracion de Pagina</li>

          <li class="nav-item ">
            <a href="#" class="nav-link <?php if($titulo=="Nosotros" || $titulo=="Historia" || $titulo=="Mision"|| $titulo=="Vision"  ) {echo "active"; }?>">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
                Nosotros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
             
                <a href="<?php echo base_url() ?>/admin/nosotros/historia" class="nav-link <?php if($titulo=="Historia" ) {echo "active"; }?>">
                <i class="nav-icon fas fa-file-alt"></i>  
                <p>Historia</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/nosotros/mision" class="nav-link <?php if($titulo=="Mision" ) {echo "active"; }?>">
                <i class="nav-icon fas fa-book"></i>  
                <p>Mision</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/nosotros/vision" class="nav-link <?php if($titulo=="Vision" ) {echo "active"; }?>">
                <i class="nav-icon fas fa-eye"></i>  
                <p>Vision</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url() ?>/admin/contacto" class="nav-link <?php if($titulo=="Contacto") {echo "active"; }?>">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Contacto    
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url() ?>/admin/slides" class="nav-link <?php if($titulo=="Slides") {echo "active"; }?>">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Slides    
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link <?php if($titulo=="Usuarios" || $titulo=="Agregar Usuario" || $titulo=="Usuarios Eliminados" ) {echo "active"; }?>">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/usuarios" class="nav-link <?php if($titulo=="Usuarios") {echo "active"; }?>">
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/usuarios/agregar" class="nav-link <?php if($titulo=="Agregar Usuario" ) {echo "active"; }?>">
                  <p>Nuevo Usuario</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/usuarios/eliminados" class="nav-link <?php if($titulo=="Usuarios Eliminados" ) {echo "active"; }?>">
                  <p>Usuarios Eliminados</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <p>Nuevo Evento</p>
                </a>
              </li> -->
            </ul>
          </li>


          <li class="nav-header">Registros</li>

          <li class="nav-item ">
            <a href="#" class="nav-link <?php if($titulo=="Noticias" || $titulo=="Agregar Noticia" || $titulo=="Noticias Eliminadas" ) {echo "active"; }?>">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Noticias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/noticias" class="nav-link <?php if($titulo=="Noticias" ) {echo "active"; }?>">
                  <p>Noticias</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/noticias/agregar" class="nav-link <?php if($titulo=="Agregar Noticia" ) {echo "active"; }?>">
                  <p>Nueva Noticia</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/noticias/eliminadas" class="nav-link <?php if($titulo=="Noticias Eliminadas" ) {echo "active"; }?>">
                  <p>Noticias Eliminadas</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./index.html" class="nav-link ">
                  <p>Nueva Noticia</p>
                </a>
              </li> -->
            </ul>
          </li>

          <!-- <li class="nav-item"> 
            <a href="#" class="nav-link <?php if($titulo=="Eventos" || $titulo=="Agregar Evento" || $titulo=="Eventos Eliminados" ) {echo "active"; }?>">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Eventos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/eventos" class="nav-link <?php if($titulo=="Eventos" ) {echo "active"; }?>">
                  <p>Eventos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/eventos/agregar" class="nav-link <?php if($titulo=="Agregar Evento" ) {echo "active"; }?>">
                  <p>Nuevo Evento</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/eventos/eliminados" class="nav-link <?php if($titulo=="Eventos Eliminados" ) {echo "active"; }?>">
                  <p>Eventos Eliminados</p>
                </a>
              </li>
             
            </ul>
          </li> -->

          
          
        
          <li class="nav-item">
            <a href="#" class="nav-link <?php if($titulo=="Directorio" || $titulo=="Añadir Miembro" || $titulo=="Miembros Eliminados" ) {echo "active"; }?>">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Directorio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/directorio" class="nav-link <?php if($titulo=="Directorio" ) {echo "active"; }?>">
                  <p>Directorio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/directorio/agregar" class="nav-link <?php if($titulo=="Añadir Miembro" ) {echo "active"; }?>">
                  <p>Nuevo Miembro</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/directorio/eliminados" class="nav-link <?php if($titulo=="Miembros Eliminados" ) {echo "active"; }?>">
                  <p>Miembros Eliminados</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <p>Nuevo Evento</p>
                </a>
              </li> -->
            </ul>
          </li>


          <li class="nav-header">Servicios</li>
          <li class="nav-item">
            <a href="#" class="nav-link <?php if($titulo=="Nichos" || $titulo=="Mensajes"  ) {echo "active"; }?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Servicios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/mensajes" class="nav-link <?php if($titulo=="Mensajes" ) {echo "active"; }?>">
                <i class="nav-icon fas fa-envelope"></i>
                  <p>Mensajes</p>
                  <span class="right badge badge-danger"><?php if($noread){ echo count($noread); }?></span>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/nichos"  class="nav-link <?php if($titulo=="Nichos" ) {echo "active"; }?>">
                <i class="nav-icon fas fa-tombstone"></i>
                  <p>Nichos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/serfin" class="nav-link <?php if($titulo=="SERFIN" ) {echo "active"; }?>">
                <i class="nav-icon fas fa-cross"></i>
                  <p>SERFIN</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?php echo base_url() ?>/admin/serfin/galeria" class="nav-link <?php if($titulo=="Galeria SERFIN" ) {echo "active"; }?>">
                <i class="nav-icon fas fa-cross"></i>
                  <p>Galeria SERFIN</p>
                </a>
              </li>

             
            </ul>
          </li>

          <li class="nav-header">Sesion</li>
          <li class="nav-item">
            <a href="#" class="nav-link " data-toggle="modal" data-target="#logoutModal">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Cerrar Sesion
                
              </p>
            </a>
          </li>


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hasta luego</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Estas seguro de cerrar sesion?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="<?php echo base_url() ?>/admin/login/logout">Cerrar Sesion</a>
                </div>
            </div>
        </div>
</div>