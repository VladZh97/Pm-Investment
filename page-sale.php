<?php /*Template Name: Gdzie kupić */

 get_header(); ?>

<main class="sale-main">
<section class="top top__offer">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
</section>
<section class="sale">
  <div class="sale__inner">
    <div class="sale__container container">
      <?= do_shortcode(' [ASL_STORELOCATOR]')?>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek_serv.png" alt="" class="contact__bottom-img">
  </div>
</section>
</main>
<?php
get_footer();