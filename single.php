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

         <div class="imagen row h_35vh imgLiquid imgLiquidFill m4">
            <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank">
               <?php echo get_the_post_thumbnail( get_the_ID(),'thumb'); ?>
            </a>
         </div>

         <div class="ficha-tecnica row text-right black_bg p4">
            <div class="medium-4 columns">
               <h6 class="h_20 mb1">Ciudad de México, 2009</h6>

               <h6 class="small-12 text-right h_20 mb1">Discografía</h6>

               <ul>
                  <li class="fontXS"><i>Nombre Album 1, 2011</i></li>
                  <li class="fontXS"><i>Nombre Album 2, 2012</i></li>
                  <li class="fontXS"><i>Nombre Album 3, 2013</i></li>
                  <li class="fontXS"><i>Nombre Album 4, 2014</i></li>
                  <li class="fontXS"><i>Nombre Album 5, 2015</i></li>
               </ul>
            </div>
            <div class="medium-4 columns">

               <h6 class="small-12 text-right h_20 mb1">Integrantes</h6>
               <ul class="small-12 text-right">
                  <li>Nombre Integrante 1</li>
                  <li>Nombre Integrante 2</li>
                  <li>Nombre Integrante 3</li>
                  <li>Nombre Integrante 4</li>
                  <li>Nombre Integrante 5</li>
                  <li>Nombre Integrante 6</li>
               </ul>
            </div>
            <div class="small-4 columns fontXS">

               <h6 class="small-12 text-right h_20 mb1">Enlaces</h6>
               <ul class="small-12 text-right ">
                  <li class="fontXS"><a href="#"><b>Facebook:</b> http://facebook.com/hackavitz</a></li>
                  <li class="fontXS"><a href="#"><b>Facebook:</b> http://facebook.com/hackavitz</a></li>
                  <li class="fontXS"><a href="#"><b>Facebook:</b> http://facebook.com/hackavitz</a></li>
                  <li class="fontXS"><a href="#"><b>Facebook:</b> http://facebook.com/hackavitz</a></li>
                  <li class="fontXS"><a href="#"><b>Facebook:</b> http://facebook.com/hackavitz</a></li>
               </ul>
            </div>

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
