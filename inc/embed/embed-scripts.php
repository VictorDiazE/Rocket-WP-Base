<?php

/**
 * Embed Scripts
 *
 * @package rocket_base
 */

/* ------------- Embed JS Scripts */
function include_scripts()
{
  wp_enqueue_script('popper', get_template_directory_uri() . '/dist/js/include/popper.min.js', false, '', true);
  wp_enqueue_script('bs-js', get_template_directory_uri() . '/dist/js/include/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script('slick-js', get_template_directory_uri() . '/dist/js/include/slick.min.js', array('jquery'), '', true);
  wp_enqueue_script('select2-js', get_template_directory_uri() . '/dist/js/include/select2.min.js', array('jquery'), '', true);
  wp_enqueue_script('skip-link-focus-fix', get_template_directory_uri() . '/dist/js/include/skip-link-focus-fix.js', array(), '20151215', true);
  wp_enqueue_script('cf7-js', get_template_directory_uri() . '/dist/js/cf7/cf7.js', array('jquery'), '', true);
  wp_enqueue_script('header-js', get_template_directory_uri() . '/dist/js/header/header.js', array('jquery'), '', true);
  wp_enqueue_script('menu-js', get_template_directory_uri() . '/dist/js/menu/menu.js', array('jquery'), '', true);
  wp_enqueue_script('select2-js', get_template_directory_uri() . '/dist/js/select2/init-select2.js', array('jquery'), '', true);
  wp_enqueue_script('slider-js', get_template_directory_uri() . '/dist/js/slider/init-slider.js', array('jquery'), '', true);
  wp_enqueue_script('init-js', get_template_directory_uri() . '/dist/js/init.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'include_scripts');
