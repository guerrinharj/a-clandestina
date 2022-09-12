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
  <div class="bg-outline-ourico">
    <section id="home-marquee">
      <div class="marquee">
      <span>
          <?php
          $args = array(
          'category_name' => 'marquee',
          'posts_per_page' => 1
          );
          query_posts( $args );
          if(have_posts()) :
          while (have_posts()) : the_post();
          the_content();
          endwhile;
          ?>
          <?php endif; ?>
        </span>
      </div>
    </section>
    <section id="home-featured-products"> FEATURED PRODUCTS </section>
    <section id="home-carousel"> CAROUSEL </section>
    <section id="home-cards"> CARDS </section>
  </div>
  <div class="bg-mar">
  </div>
</main>

<?php get_header()?>
