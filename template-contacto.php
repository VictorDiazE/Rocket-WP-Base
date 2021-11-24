<?php

/* Template Name: contacto */

get_header();
?>

<!-- BANNER -->
<section class="img-nosotros banner-contacto px-extra d-none d-lg-flex align-items-center"
    style="background:url('<?php the_field('img_contacto_banner') ?>') center center ; background-size: cover;">
    <div class="bg-transparent-white content-overlay4 color-grey d-lg-none"></div>
    <div class="container-fluid m-layaout py-lg-5 py-3">
        <div class="bg-transparent-white content-overlay"></div>
        <div class="row">
            <div class="col-5">
                <h1 class="color-black text-uppercase fw-600 fs-lg-18 py-lg-3 py-1">
                    <?php the_field('title_contacto_banner') ?></h1>
            </div>
        </div>

    </div>
</section>


<!-- MÓVIL -->
<section class="img-nosotros banner-contacto px-extra d-flex align-items-center d-block d-lg-none"
    style="background:url('<?php the_field('img_contacto_banner_movil') ?>') center center ; background-size: cover;">
    <div class="bg-transparent-white content-overlay color-grey d-lg-none"></div>
    <div class="container-fluid m-layaout py-lg-5 py-3">
        <div class="row">
            <div class="col-12">
                <h1 class="color-black text-uppercase fw-600 py-2 mb-0"><?php the_field('title_contacto_banner') ?>
                </h1>
            </div>
        </div>

    </div>
</section>
<!-- /BANNER -->


<!-- INFORMACIÓN CONTACTO -->
<section class="info-cotacto bg-custom-white-smoke py-lg-3 limite">
    <div class="container-fluid m-layaout py-5">
        <h4 class="fw-700 text-lg-center text-left mb-lg-4 tit-info-contact">
            <?php the_field('title_informacion_contacto')?></h4>
        <div class="row mt-lg-3 mt-0">
            <div class="col-lg-6 col-12 p-3 order-lg-1 order-2">
                <div class="mapa-alt">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.629168588311!2d2.160721215804064!3d41.382140879264576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a28a92c76e41%3A0x862fb083914e4e06!2sInnovalocal!5e0!3m2!1ses!2ses!4v1593589212115!5m2!1ses!2ses"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="col-lg-6 col-12 p-3 order-lg-2 order-1">
                <?php
                    if( have_rows('informacion_contacto') ):
                    while ( have_rows('informacion_contacto') ) : the_row();
                ?>
                <div>
                    <p class="mb-1 info-contact">
                        <span class="fw-500"><?php the_sub_field('title_telefono_contacto')?></span>
                        <span><a
                                href="tel:0034<?php the_sub_field('numero_telefono_contacto')?>"><?php the_sub_field('numero_telefono_contacto')?></a></span>
                    </p>
                    <p class="mb-1 info-contact">
                        <span class="fw-500"><?php the_sub_field('title_mail_contacto')?></span>
                        <span><a
                                href="mailto:<?php the_sub_field('txt_correo_contacto')?>"><?php the_sub_field('txt_correo_contacto')?></a></span>
                    </p>
                    <p class="mb-1 info-contact">
                        <span class="fw-500"><?php the_sub_field('title_direccion_contacto')?></span>
                        <span><?php the_sub_field('txt_direccion_contacto')?></span>
                    </p>

                    <?php
                    endwhile;
                    endif;
                ?>

                    <?php

                    $contact = get_field('codigo_formulario');
                     echo do_shortcode($contact);
                ?>

                </div>



            </div>
        </div>
</section>
<!-- /INFORMACIÓN CONTACTO -->

<?php

get_footer();