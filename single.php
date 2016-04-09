<?php

get_header();


if( have_posts()):
   while( have_posts()):
      the_post();
      ?>

      <article id="post_<?php echo get_the_ID(); ?>" class="post post_single white_bg small-12 small-centered medium-10 large-8 columns p5">

         <h3 class="p4 black_bg text-left">
            <?php echo get_the_title(); ?>
         </h3>

         <div class="small-12 columns text-right fontS p3">
            <i>Publicado el: <?php echo date_i18n('d \d\e F. Y',strtotime($post->post_date)); ?></i>
         </div>

         <div class="imagen row h_35vh imgLiquid imgLiquidFill m4">
            <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank">
               <?php echo get_the_post_thumbnail( get_the_ID(),'thumb'); ?>
            </a>
         </div>


         <div class="contenido row text-left mt2 p5">
            <?php echo apply_filters('the_content', get_the_content()); ?>
         </div>


      </article>


      <script type="text/javascript">

      jQuery(document).ready(function( $ ){
         $('.post p, .post iframe').width( $('.post').width() );
      });

      </script>

      <?php

   endwhile;
endif;

get_footer();

?>
