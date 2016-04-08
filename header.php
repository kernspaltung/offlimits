<!doctype html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <title>Off Limits</title>
   <?php
   wp_head();
   ?>
</head>
<body>
   <div id="contenedor" class="row align-middle ovyH" style="height:100vh">

      <div class="absUpL z-1 w_100vw h_100vh imgLiquid imgLiquidFill">
         <img src="<?php echo get_stylesheet_directory_uri() . "/recursos/img/"; ?>ilustracion.jpg" alt="" class="">
      </div>
      <div class="img-overlay z-1 w_100vw h_100vh absUpL"></div>

      <header id="cabecera" class="columns shrink text-right">
         <div id="logotipo" class="small-4 medium-3 large-2 columns h_100 imgLiquid imgLiquidNoFill <?php echo is_front_page() ? 'hidden':''; ?>">
            <a href="<?php echo site_url() ?>">
               <img class="alignnone size-full wp-image-9" src="http://localhost/web/kernspaltung/offlimits/offlimits_wp/wp-content/uploads/2016/04/logo.png" alt="logo" width="500" height="151" />
            </a>
         </div>
         <div class="small-4 medium-2 large-1 columns mt2">
            <a href="mailto:offlimits.mx@gmail.com">
               <i class="fa fa-envelope fontXL hvrshw"></i>
            </a>
         </div>
      </header>
      <main class="columns text-center scrollH h_80vh">
