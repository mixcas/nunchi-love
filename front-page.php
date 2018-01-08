<?php
get_header();
?>

<main id="main-content">
  <section id="home-products">
    <div class="container">

<?php

$products_args = array(
  'post_type' => 'product',
  'posts_per_page' => -1,
);
$products = new WP_Query( $products_args );

if ($products->have_posts()) {
  while ($products->have_posts()) {
    $products->the_post();
    $product = wc_get_product(get_the_ID());

    // Ensure visibility
    if ( !empty( $product ) || $product->is_visible() ) {
?>

        <article <?php post_class('grid-row justify-end'); ?> id="post-<?php the_ID(); ?>">
          <div class="grid-item item-s-12 item-m-9 item-l-6 padding-top-small">
            <a href="<?php the_permalink() ?>">
              <?php the_post_thumbnail(); ?>
            </a>
          </div>

          <div class="grid-item item-s-12 item-m-3 no-gutter">
            <div class="grid-row product-data padding-top-small">
              <div class="black-title grid-item item-s-12 padding-top-tiny padding-bottom-tiny margin-bottom-tiny">
<?php
      /**
       * woocommerce_shop_loop_item_title hook.
       *
       * @hooked woocommerce_template_loop_product_title - 10
       */

      do_action( 'woocommerce_shop_loop_item_title' );
?>
              </div>

              <div class="grid-item item-s-12">
<?php
      /**
       * woocommerce_after_shop_loop_item_title hook.
       *
       * @hooked woocommerce_template_loop_rating - 5
       * @hooked woocommerce_template_loop_price - 10
       */
      do_action( 'woocommerce_after_shop_loop_item_title' );
?>
              </div>

              <div class="grid-item item-s-12">
                <a href="<?php the_permalink() ?>">Comprar ⟶</a>
              </div>
            </div>
          </div>
        </article>

<?php
    }
  }
} else {
?>
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

    </div>
  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
  get_footer();
?>
