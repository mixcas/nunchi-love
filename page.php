<?php
get_header();
?>

<main id="main-content">
  <section id="posts">
    <div class="container">
      <div class="grid-row justify-center">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

        <article <?php post_class('grid-item item-s-12 item-s-8 no-gutter'); ?> id="post-<?php the_ID(); ?>">
          <div class="grid-row padding-top-small">

            <div class="black-title grid-item item-s-12 margin-bottom-tiny">
              <h1><?php the_title(); ?></h1>
            </div>

            <div class="grid-item item-s-12 margin-bottom-small">
              <?php the_content(); ?>
            </div>

          </div>
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
