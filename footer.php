<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rocket_base
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer bg-black color-custom-white pt-lg-4 pt-2">
  <section class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-12">
          <div class="footer-logo">
            <?php
            if (
              !function_exists('dynamic_sidebar')
              || !dynamic_sidebar('Footer_Logo')
            ) : ?>
            <?php
            endif; ?>
          </div>
          <div class="mt-4 mt-lg-5 text-left">
            <?php
            if (
              !function_exists('dynamic_sidebar')
              || !dynamic_sidebar('Footer_1')
            ) : ?>
            <?php
            endif; ?>
          </div>
        </div>
        <div class="col-lg-3 col-12">
          <?php
          if (
            !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Footer_2')
          ) : ?>
          <?php
          endif; ?>
        </div>
        <div class="col-lg-3 col-12">
          <?php
          if (
            !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Footer_3')
          ) : ?>
          <?php
          endif; ?>
        </div>
        <div class="col-lg-4 col-12">
          <?php
          if (
            !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Footer_4')
          ) : ?>
          <?php
          endif; ?>
        </div>

      </div>
    </div>
    <div class="container-fluid bg-grey-dark color-white">
      <div class="row py-3">
        <div class="col-sm-12 mt-1 footer-copyright">
          <div class="text-center col-xl-12">
            <p class="mb-0 fs-08">
              © <?php echo date("Y"); ?> · Rocket Base · Todos los derechos reservados
            </p>
            <p class="mb-0"><?php footer_nav_content(); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>