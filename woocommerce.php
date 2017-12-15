<?php
get_header();
?>

<main id="main-content">
  <section id="store">
    <div class="container">
      <div class="grid-row justify-center">
        <div class="grid-item item-s-6">

  <?php woocommerce_content(); ?>

        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
