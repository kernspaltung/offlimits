<div id="blog_inicio" class="small-12 mt_sm_4 medium-6 columns rel h_100">

      <?php
      $args = array( "category_name" => "blog-inicio", "posts_per_page" => -1 );
      $q = new WP_Query($args);
      if( $q->have_posts()):
         while( $q->have_posts()):
            $q->the_post();
            ?>

            <article id="post_<?php echo get_the_ID(); ?>" class="small-10 small-centered medium-6 medium-centered large-4 large-centered p5 white_bg callout">

               <h3><?php echo get_the_title(); ?></h3>

               <div class="imagen small-6 small-offset-3 end medium-4 medium-offset-0 columns ">
                  <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank">
                     <?php echo get_the_post_thumbnail( get_the_ID(),'thumb'); ?>
                  </a>
               </div>

               <div class="contenido medium-8 columns text-left p4">
                  <?php echo apply_filters('the_excerpt', get_the_excerpt()); ?>
               </div>

               <div class="ver-mas text-center row text-right p4">
                  <a href="<?php echo get_the_permalink( get_the_ID() ); ?>">

                     <button class="p3 text-center">
                        <i class="fa fa-plus fontL"></i>
                        <span class="row fontS text-right">Ver más</span>
                     </button>

                  </a>
               </div>

            </article>

            <?php
         endwhile;
      endif;
      ?>

</div>
