<?php

/**
 * Custom Translation
 *
 * @package rocket_base
 */

/* ------------- Display current language */
function display_current_language()
{
  if (!function_exists('pll_the_languages')) return;
  $languages = pll_the_languages(array(
    'display_names_as'       => 'slug',
    'raw'                    => true,
    'hide_if_empty'          => 1
  ));
  $output = '';
  foreach ($languages as $language) {
    $current = $language['current_lang'];
    $slug = $language['slug'];
    $url = $language['url'];
    $locale = $language['locale'];
    if ($current) {
      $output = '<span> ' . $slug . '</span>';
    }
  }
  return $output;
  die();
}

/* ------------- Display other languages based on current language */
function display_other_languages()
{
  if (!function_exists('pll_the_languages')) return;
  global $post;
  $current_post_type = $post->post_type;
  $languages = pll_the_languages(array(
    'display_names_as'       => 'slug',
    'raw'                    => true,
    'hide_if_empty'          => 1
  ));
  $output = '';

  foreach ($languages as $language) {
    $current = $language['current_lang'];
    $slug = $language['slug'];
    $locale = $language['locale'];

    if (!$current) {
      if ($locale == 'en-GB') {
        $flag_slug = 'gb';
      } else {
        $flag_slug = $slug;
      }
      if (is_404()) {
        $url = get_site_url() . '/' . $slug . '/404.php';
      } elseif (is_page() || $current_post_type == 'teacherfile') {
        $url = $language['url'];
      } else {
        $url = '#';
      }
      $output .= '<a class="dropdown-item d-flex align-items-center text-uppercase" href="' . $url . '">';
      $output .= $slug . '</a>';
    }
  }
  return $output;
  die();
}

/* ------------- Display static URLs for Form Action attribute */
function translate_static_slug($string)
{
  if (!function_exists('pll_the_languages')) return;

  $site_url = get_site_url();
  $translate_string = $string;

  $languages = pll_the_languages(array(
    'display_names_as'       => 'slug',
    'raw'                    => true,
    'hide_if_empty'          => 1
  ));
  $output = '';
  foreach ($languages as $language) {
    $current = $language['current_lang'];
    $slug = $language['slug'];
    if ($current && $slug != 'es') {
      $output = $site_url . '/' . $slug . '/' . pll__($translate_string);
    } elseif ($current && $slug == 'es') {
      $output = $site_url . '/' . pll__($translate_string);
    }
  }
  return $output;
  die();
}
