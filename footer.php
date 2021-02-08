<section class="footer-des">
  <div class="footer-des__inner">
    <div class="container">
      <div class="footer-des__row row">
        <div class="col-md-4 footer-des__text">
          <p class="footer-des__title"><?php the_field('footer-des__title', 'option')?></p>
          <p class="footer-des__text"><?php the_field('footer-des__text', 'option')?></p>
        </div>
        <div class="col-md-4 footer-des__products">
          <div class="footer-des__products-container">
            <p class="footer-des__title"><?php the_field('product__title', 'option')?></p>
            <?php if( have_rows('footer-des__product-list', 'option') ): ?>
              <ul class="footer-des__list">
                <?php while( have_rows('footer-des__product-list', 'option') ): the_row(); ?>
                  <li class="footer-des__item">
                    <a href="<?php the_sub_field('product__ink', 'option')?>" class="footer-des__link"><?php the_sub_field('product__ink-text', 'option')?></a>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>

        <div class="col-md-4 footer-des__important">
          <p class="footer-des__title"><?php the_field('important__title', 'option')?></p>
          <?php if( have_rows('footer-des__important-list', 'option') ): ?>
            <ul class="footer-des__list">
              <?php while( have_rows('footer-des__important-list', 'option') ): the_row(); ?>
                <li class="footer-des__item">
                  <a href="<?php the_sub_field('important__ink', 'option')?>" class="footer-des__link"><?php the_sub_field('important__ink-text', 'option')?></a>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>

      </div>
      <div class="footer-des__icons row">
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ue.png" alt="">
        </div>
        <div class="col-md-4 footer-des__icons-col">
          <div class="footer-des__icons-link">
            <p class="footer-des__title"><?php the_field('social__title', 'option')?></p>
              <div class="footer-des__icons">
                <a href="<?php the_field('insta', 'option')?>" class="footer-des__link-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt=""></a>
                <a href="<?php the_field('face', 'option')?>" class="footer-des__link-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/face.png" alt=""></a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="footer">
  <div class="footer__seo">
  <a class="footer__seo-link" title="Millenium Studio" href="http://www.milleniumstudio.pl" target="_blank"><?php if (ICL_LANGUAGE_CODE == "pl") {
             echo "projektowanie stron";  
             } else {
                  echo "web design";  
                  } ?></a> <span style="cursor:pointer;" onclick="location.href = 'http://www.milleniumstudio.pl';">Millenium Studio</span>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script>var privacylink = "<?php echo get_page_link(3) ?>";</script>
<script>var privacylinkEn = "<?php echo get_page_link(9161) ?>";</script>
<script>var privacylinkDe = "<?php echo get_page_link(12869) ?>";</script>
<script type="text/javascript">
  DFLIP.defaults.scrollWheel = false;
  dFlipWPGlobal.scrollWheel = false;
</script>
</body>
</html>