<?php /* Template Name: Blog */ ?>

essa é o blog
ß

 <?php
  $args = array(
    'category_name' => 'blog',
    'posts_per_page' => 5,
    'order' => 'ASC'
  );

  $loop = new WP_Query( $args );

  if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post();
    get_template_part('template-parts/content-blog');
    endwhile;
  endif;
  ?>
