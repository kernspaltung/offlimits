<?php
// Template Name: Landing Page
get_header();
?>

<div id="portada" class="small-12 medium-6 columns align-middle text-center h_80vh h_sm_60vh rel">

   <?php

   if(have_posts()):
      while(have_posts()):
         the_post();

   ?>

   <div class="columns rel vcenter_md">
      <?php echo get_the_content(); ?>
   </div>

   <?php
      endwhile;
   endif;
   ?>

</div>
<div id="blog_inicio" class="small-12 mt_sm_4 medium-6 columns rel h_85">
   <article id="noticia_principal" class="columns p5 black_bg vcenter_md">

      <?php
      $args = array( "category_name" => "inicio", "posts_per_page" => 1 );
      $q = new WP_Query($args);
      if( $q->have_posts()):
         while( $q->have_posts()):
            $q->the_post();
      ?>

      <h3><?php echo get_the_title(); ?></h3>

      <div class="imagen small-6 small-offset-3 end medium-4 medium-offset-0 columns ">
         <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank">
            <?php echo get_the_post_thumbnail( get_the_ID(),'thumb'); ?>
         </a>
      </div>

      <div class="contenido medium-8 columns text-left p4">
         <?php echo apply_filters('the_excerpt', get_the_excerpt()); ?>
      </div>

      <?php
      endwhile;
      endif;
      ?>

   </article>

</div><!-- #blog_inicio -->







<?php include_once 'secciones/01-b-landing-blog.php'; ?>


<?php
get_footer();
?>
