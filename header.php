<!-- <!doctype html> -->
<html class="no-js" lang="es">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <title>Off Limits</title>



   <?php

   $name = get_bloginfo('name');

   $twitter_user = '@offlimitsmx';

   if( is_single() ) {

      $description = apply_filters( 'the_excerpt', get_the_excerpt() );
      $url = get_the_permalink( get_the_ID() );

   } else {

      $description = get_bloginfo('description');
      $url = get_bloginfo('url');

   }

   $thumb_id = get_post_thumbnail_id();
   $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
   $image = $thumb_url[0];


   $date = '';
   $time = '';

   ?>


   <meta name="description" content="<?php echo $description; ?>" />

   <!-- Schema.org markup for Google+ -->
   <meta itemprop="name" content="<?php echo $name; ?>">
   <meta itemprop="description" content="<?php echo $description; ?> ?>ss">
   <meta itemprop="image" content="<?php echo $image; ?>">

   <!-- Twitter Card data -->
   <meta name="twitter:card" content="<?php echo $image; ?>">
   <meta name="twitter:site" content="<?php echo $twitter_user; ?>">
   <meta name="twitter:title" content="<?php echo $name; ?>">
   <meta name="twitter:description" content="<?php echo $description; ?>">
   <!-- <meta name="twitter:creator" content="@author_handle"> -->
   <!-- Twitter summary card with large image must be at least 280x150px -->
   <meta name="twitter:image:src" content="<?php echo $image; ?>">

   <!-- Open Graph data -->
   <meta property="og:title" content="<?php echo $name; ?>"/>
   <meta property="og:type" content="article" />
   <meta property="og:url" content="<?php echo $url; ?>" />
   <meta property="og:image" content="<?php echo $image; ?>" />
   <meta property="og:description" content="<?php echo $description; ?>" />
   <meta property="og:site_name" content="<?php echo $name; ?>" />
   <meta property="article:published_time" content="<?php echo $date; ?>" />
   <meta property="article:modified_time" content="<?php echo $time; ?>" />
   <!-- <meta property="article:section" content="Artget_numberic ID" /> -->

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
