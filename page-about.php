<?php /*Template Name: O Nas */

 get_header(); ?>

<main class="about-main">
  <section class="top top__about">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="about__inner">
      <div class="about__container container">
        <div class="about__row row">
          <div class="col-md-6 about__des">
            <h3 class="about__des-title"><?php the_field('about__top-title')?></h3>
            <div class="about__des-text"><?php the_field('about__top-text')?></div>
          </div>
          <div class="col-md-6 about__image">
            <img src="<?php the_field('top__first')?>" alt="" class="about__image-first">
            <img src="<?php the_field('top__second')?>" alt="" class="about__image-second">
            <img src="<?php the_field('top__third')?>" alt="" class="about__image-third">
          </div>
        </div>
      </div>
        <div class="about__bg">
          <div class="about__container container">
            <div class="about__row row">
              <div class="col-md-6 about__image about__image-main">
                <div class="about__image-top">
                  <img src="<?php the_field('bottom__first')?>" alt="" class="about__image-first">
                </div>
                <div class="about__image-bottom">
                  <img src="<?php the_field('bottom__second')?>" alt="" class="about__image-second">
                  <img src="<?php the_field('bottom__third')?>" alt="" class="about__image-third">
                </div>
              </div>
              <div class="col-md-6 about__des">
                <h3 class="about__des-title"><?php the_field('about__bottom-title')?></h3>
                <div class="about__des-text"><?php the_field('about__bottom-text')?></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<?php
get_footer();