<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rocket_base
 */

?>

<div class="col-lg-6 col-12 no-results not-found">
    <header class="page-header">
        <?php if (pll_current_language() == 'es') {  ?>
            <h1 class="page-title"><?php esc_html_e('Nada Encontrado', 'rocket_base'); ?></h1>
        <?php } elseif (pll_current_language() == 'ca') { ?>
            <h1 class="page-title"><?php esc_html_e('Gens Oposat', 'rocket_base'); ?></h1>
        <?php } ?>
    </header><!-- .page-header -->

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) :

            printf(
                '<p>' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                    __('Listo para publicar su primer post? <a href="%1$s">Comience aquí</a>.', 'rocket_base'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );

        elseif (is_search()) :
        ?>

            <?php if (pll_current_language() == 'es') {  ?>
                <p><?php esc_html_e('Lo sentimos, pero nada coincide con sus términos de búsqueda. Intente nuevamente con algunas palabras clave diferentes.', 'rocket_base'); ?>
                </p>
            <?php } elseif (pll_current_language() == 'ca') { ?>
                <p><?php esc_html_e('Ho sentim, però res coincideix amb els seus termes de cerca. Intenti novament amb algunes paraules clau diferents.', 'rocket_base'); ?>
                <?php } ?>
            <?php
        else :
            ?>

                <p><?php esc_html_e('Parece que no podemos encontrar lo que estás buscando. Quizás la búsqueda pueda ayudar.', 'rocket_base'); ?>
                </p>
            <?php
        endif;
            ?>
    </div><!-- .page-content -->
</div><!-- .no-results -->