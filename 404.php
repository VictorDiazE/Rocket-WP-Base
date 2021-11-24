<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rocket_base
 */

get_header();
?>
<section class="bg-light-red py-5 error-404">
  <div class="wrapper">
    <div class="container-fluid">
      <div class="row py-md-5">
        <div class="col-md-6 col-12 text-center pr-xl-5
        d-flex align-items-center flex-column justify-content-center mt-4 mb-5 my-md-0">
          <h1 class="mb-4 text-center color-red text-uppercase">
            <?php pll_e('¡Vaya! Error 404') ?>
          </h1>
          <div>
            <p>
              <?php pll_e('No hemos podido encontrar la página que buscas.') ?>
              <?php pll_e('Aquí tienes algunos enlaces que pueden servirte de ayuda:') ?>
            </p>
          </div>
          <div class="text-center mt-4 d-flex align-items-center
          justify-content-center flex-column">
            <a href="<?php echo site_url() ?>" class="btn bg-transparent color-black border-black border-1
              text-uppercase px-4 py-2 mb-3">
              <?php pll_e('Inicio') ?>
            </a>
            <a href="<?php echo site_url() ?>/otro-link/" class="btn bg-transparent color-black border-black border-1
              text-uppercase px-4 py-2 mb-3">
              <?php pll_e('Otro link') ?>
            </a>
            <a href="<?php echo site_url() ?>/contacto/" class="btn bg-red color-custom-white text-uppercase px-4 py-2">
              <?php pll_e('Contacto') ?>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="bg-image-regular" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/error.jpg)">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
