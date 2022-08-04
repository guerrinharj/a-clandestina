<?php /* Template Name: Sobre */ ?>

essa é o sobre


 <?php
  $args = array(
    'category_name' => 'sobre',
    'posts_per_page' => 1,
    'order' => 'ASC'
  );

  $loop = new WP_Query( $args );

  if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post();
    get_template_part('template-parts/content-sobre');
    endwhile;
  endif;
  ?>
