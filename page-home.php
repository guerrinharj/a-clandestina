<?php /* Template Name: Home */ ?>

<main>
  <section id="home-hero">

      <?php
      $args = array(
      'category_name' => 'home-hero',
      'posts_per_page' => 1,
      'order' => 'ASC'
      );

      $loop = new WP_Query( $args );

      if ( $loop->have_posts() ) :
      while ( $loop->have_posts() ) : $loop->the_post();
      get_template_part('template-parts/content-hero');
      endwhile;
      endif;
      ?>
  </section>
  <section id="home-marquee"> MARQUEE </section>
  <section id="home-featured-products"> FEATURED PRODUCTS </section>
  <section id="home-carousel"> CAROUSEL </section>
  <section id="home-cards"> CARDS </section>
</main>

<?php get_header()?>
