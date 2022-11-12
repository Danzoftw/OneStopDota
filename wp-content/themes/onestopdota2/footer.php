    <footer id="footer" class="footer-section position-relative theme bg-white color-black d-flex align-items-center py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 d-lg-none mb-3">
            <p class="font-HK-Grotesk-semibold mb-3 large">Quick links</p>
            <?php
              if (has_nav_menu('primary_footer')) {
                wp_nav_menu(array(
                  'theme_location' => 'primary_footer',
                  'container' => false,
                  'menu_class' => 'menu-section mobile-menu h-100 font-HK-Grotesk-medium pl-0',
                  )
                );
              }
            ?>
          </div>
          <div class="col-12 col-lg-5">
            <p class="font-HK-Grotesk-semibold large mb-4 theme">need to know more?</p>
            <a href="<?php echo get_site_url(); ?>/contact">
              <h3 class="theme color-light-blue font-Apercu-bold large-text">Contact us</h3>
            </a>
          </div>
          <div class="col-12 col-sm-2 d-none d-lg-block">
            <p class="font-HK-Grotesk-semibold mb-3 large theme">Quick links</p>
            <?php
              if (has_nav_menu('primary_footer')) {
                wp_nav_menu(array(
                  'theme_location' => 'primary_footer',
                  'container' => false,
                  'menu_class' => 'menu-section navbar-nav h-100 font-HK-Grotesk-medium',
                  )
                );
              }
            ?>
          </div>
          <div class="col-12 col-lg-5">
            <p class="font-HK-Grotesk-semibold mb-4 large theme">subscribe to our updates:</p>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
          </div>
        </div>
      </div>
    </footer>
  	<?php wp_footer(); ?>
  </body>
</html>
