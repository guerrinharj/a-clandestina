<li class="featured-product" style="background-image: url(<?php the_post_thumbnail_url();?>)">
  <div class="featured-product-info">
    <p class="fp-title">
      <?php the_title();?>
    </p>
    <p class="fp-price">
      <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
      <?php echo $product->get_price_html(); ?>
    </p>
    <span class="fp-parcela">
      3 parcelas de
      <?php
        $price = $product->get_price_html();
        $removedprice = trim($price, "R$");
        $rightprice = (int) $removedprice;
        echo $rightprice / 3;
       ?>
    </span>
  </div>
</li>
