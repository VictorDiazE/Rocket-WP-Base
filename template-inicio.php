<?php

/* Template Name: Home */

get_header('top-bar');
?>

<section id="banner">
  <div class="banner banner-desktop d-none d-lg-block"
  style="background-image:url(<?php the_field('banner_desktop_img') ?>)">
    <div class="bg-overlay"></div>
  </div>
  <div class="banner banner-mobile d-lg-none"
  style="background-image:url(<?php the_field('banner_mobile_img') ?>)">
    <div class="bg-overlay"></div>
  </div>
</section>

<section class="wrapper my-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 my-5"><?php
        display_tag(
          'title_group',
          'title_tag',
          'title_txt',
          'text-uppercase text-center'
          )
          ?></div>
    </div>
  </div>
</section>




<?php

get_footer();
