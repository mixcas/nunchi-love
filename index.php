<?php get_header(); ?>

<!-- main content -->

<main id="main-content">

  <!-- main posts loop -->
  <section id="posts">

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

<?php the_content(); ?>

    </article>

  <?php } ?>
<?php } else { ?>
    <p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
<?php } ?>

  <!-- end posts -->
  </section>

<?php if( get_next_posts_link() || get_previous_posts_link() ) { ?>
  <!-- post pagination -->
  <nav id="pagination">
  <?php
    $previous = get_previous_posts_link('Newer');
    $next = get_next_posts_link('Older');
    if ($previous) {
      echo $previous;
    }
    if ($previous && $next) {
      echo ' &mdash; ';
    }
    if ($next) {
      echo $next;
    }
  ?>
  </nav>
<?php } ?>

<!-- end main-content -->

</main>

<?php get_footer(); ?>
