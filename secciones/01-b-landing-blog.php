<div id="blog_bandas" class="small-12 columns  mt4 h_100  ">

<h1>Presentación del Festival: 15 de abril, 2016</h1>

<div class="row align-center">

      <?php
      $args = array( "category_name" => "blog-inicio", "posts_per_page" => -1 );
      $q = new WP_Query($args);
      if( $q->have_posts()):
         while( $q->have_posts()):
            $q->the_post();


            ?>

            <article id="post_<?php echo get_the_ID(); ?>" class="small-10 medium-6 large-4 <?php echo $q->post_count > 1 ? 'columns' : 'small-centered'; ?> p5 rel">
               <div class="row h_100 p4 black_bg">

               <a href="<?php echo get_the_permalink(get_the_ID()); ?>">

               <div class="title row h_20vh">
                  <div class="row vcenter text-center">
                     <h3 class="p4"><?php echo get_the_title(); ?></h3>
                  </div>
               </div>

               <div class="imagen row columns imgLiquid imgLiquidNoFill h_35vh">
                  <?php echo get_the_post_thumbnail( get_the_ID(),'thumb'); ?>
               </div>

               <div class="small-12 columns text-right fontS p3">
                  <i>Publicado el: <?php echo date_i18n('d \d\e F. Y',strtotime($post->post_date)); ?></i>
               </div>

               <div class="contenido small-12 columns  text-left p4 pb0 black pt0">
                  <?php echo apply_filters('the_excerpt', get_the_excerpt() ); ?>
               </div>

               <div class="ver-mas small-12 text-right black">
                     <button class="p3 text-center">
                        <!-- <i class="fa fa-plus fontL"></i> -->
                        <span class="row fontS text-right">Ver más</span>
                        <i class="fa fa-arrow-right fontL p2"></i>
                     </button>
               </div>

               </a>
               </div>

            </article>

            <?php

         endwhile;
      endif;
      ?>

</div>
