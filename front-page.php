<?php /*Template Name: Strona glowna */

 get_header(); ?>

<main calss="front">

<!-- HERO -->
  <section class="hero">
    <div class="hero__inner">
      <div class="hero__main">
        <?php if( have_rows('hero__main') ): ?>
          <ul class="hero__list owl-carousel">
            <?php while( have_rows('hero__main') ): the_row(); ?>
              <li class="hero__item" style="background-image: url(<?php the_sub_field('hero__img')?>)">
                <div class="container">
                  <div class="hero__container">

                    <div class="hero__title">
                        <p class="hero__title-first"><?php the_sub_field('hero__title-first')?></p>
                        <p class="hero__title-second"><?php the_sub_field('hero__title-second')?></p>
                    </div>
                    <p class="hero__text"><?php the_sub_field('hero__text')?></p>
                    <a href="<?php the_sub_field('hero__link')?>" class="hero__link"><?php the_sub_field('hero__link-text')?></a>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>

<!-- QUALITY -->
  <section class="quality">
    <div class="quality__inner">
      <div class="quality__container container">
        <div class="quality__row row">
          <div class="quality__first col-md-4">
            <h3 class="quality__title"><?php the_field('quality__title-first')?></h3>
            <p class="quality__des"><?php the_field('quality__des-first')?></p>
          </div>
          <div class="quality__second col-md-4">
            <h3 class="quality__title"><?php the_field('quality__title-second')?></h3>
            <p class="quality__des"><?php the_field('quality__des-second')?></p>
          </div>
          <div class="quality__third col-md-4">
            <h3 class="quality__title"><?php the_field('quality__title-third')?></h3>
            <p class="quality__des"><?php the_field('quality__des-third')?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DESCRIPTION -->
  <section class="description">
    <div class="description__inner">
      <div class="description__container">

        <div class="description__row">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="description__img">
                  <img src="<?php the_field('description__image-first')?>" alt="" class="description__image">
                </div>
              </div>
              <div class="col-md-6">
                <div class="description__des">
                  <p class="description__title"><?php the_field('description__title-first')?></p>
                  <p class="description__text"><?php the_field('description__text-first')?></p>
                </div>
              </div>
            </div>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek.png" alt="" class="bg__img">
        </div>

        <div class="description__row container">
          <div class="row">
            <div class="col-md-6">
              <p class="description__title"><?php the_field('description__title-second')?></p>
              <p class="description__text"><?php the_field('description__text-second')?></p>
            </div>
            <div class="col-md-6">
              <img src="<?php the_field('description__image-second')?>" alt="" class="description__image">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- REVIEWS -->
  <section class="reviews">
    <div class="reviews__inner">
      <div class="reviews__container container">
        <div class="reviews__row row">
          <div class="col-md-6 reviews__des">
            <p class="reviews__title"><?php the_field('reviews__title')?></p>
            <p class="reviews__des"><?php the_field('reviews__des')?></p>
          </div>
          <div class="col-md-6 reviews__slider">
            <div class="reviews__slider-container">
              <?php if( have_rows('reviews__main') ): ?>
                <ul class="reviews__list owl-carousel">
                  <?php while( have_rows('reviews__main') ): the_row(); ?>
                    <li class="reviews__item">
                      <p class="reviews__item-text"><?php the_sub_field('reviews__item-text')?></p>
                      <p class="reviews__item-autor"><?php the_sub_field('reviews__item-autor')?></p>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek2.png" alt="" class="bg__img">
    </div>
  </section>

</main>
<?php
get_footer();