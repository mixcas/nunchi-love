<?php
get_header();
?>

<main id="main-content">
  <section id="home-products">
    <div class="container">
      <div class="grid-row justify-center">

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
    pr($product->get_regular_price());

?>

        <article <?php post_class('grid-item item-s-12 item-m-10 text-align-center'); ?> id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail(); ?>
          </a>

          <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>

          <a href="<?php the_permalink() ?>">
            <?php echo $product->get_regular_price(); ?>
          </a>

        </article>

<?php
  }
} else {
?>
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

      </div>
    </div>
  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
  get_footer();
?>
