<?php
$site_options = get_site_option('_igv_site_options');

$about = $site_options['_igv_footer_about'];
?>
  <footer id="footer" class="padding-top-mid padding-bottom-large">
    <div class="container">
      <div class="grid-row justify-center">
        <div class="grid-item item-s-12 item-m-3">
        <?php echo apply_filters('the_content', $about); ?>
        </div>
        <div class="grid-item item-s-12 item-m-3 no-gutter">
          <div class="grid-row">
            <div class="grid-item item-s-12">
              <a href="<?php echo get_permalink( get_page_by_path('Contacto')); ?>">Contacto</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</section>

<?php
get_template_part('partials/scripts');
get_template_part('partials/schema-org');
?>

<canvas id="background-canvas"></canvas>

</body>
</html>
