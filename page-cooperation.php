<?php /*Template Name: Współpraca */

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
    <div class="sale__row row">
      <div class="sale__text col-md-7">
      <div class="sale__content"><?php echo the_content('')?></div>
      </div>
      <div class="sale__contact col-md-5">
        <h2 class="contact__title sale__contact-title"><?php if (ICL_LANGUAGE_CODE == "pl") {
             echo "Formularz kontaktowy";  
             } elseif (ICL_LANGUAGE_CODE == "en") {
                  echo "Contact form";  
                  } elseif (ICL_LANGUAGE_CODE == "de") {
                    echo "Kontakt-Formular";  
                    } ?></h2>
        <?php if (ICL_LANGUAGE_CODE == "pl") {
             echo do_shortcode('[contact-form-7 id="183" title="Współpraca"]');  
             } elseif (ICL_LANGUAGE_CODE == "en") {
              echo do_shortcode('[contact-form-7 id="13387" title="Współpraca (en)"]');  
                  } elseif (ICL_LANGUAGE_CODE == "de") {
                    echo do_shortcode('[contact-form-7 id="13388" title="Współpraca (de)"]');  
					} ?>
      </div>
    </div>
      
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek_serv.png" alt="" class="contact__bottom-img">
  </div>
</section>
</main>
<?php
get_footer();