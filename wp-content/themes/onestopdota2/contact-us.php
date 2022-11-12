<?php
/*

 * Template Name: Contact Us Template

*/
  get_header();
?>

<section class="contact-section position-relative py-5 theme bg-dark-brown h-m100vh d-flex align-items-center">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-12 px-0 d-flex flex-wrap">
        <div class="col-12 col-md-5 mb-5 mb-md-0 pr-lg-5">
          <div class="title-holder mb-4">
            <h1 class="theme color-white large-title font-Apercu-pro"><?php the_field('title'); ?></h1>
          </div>
          <div class="content-holder mb-4 pr-lg-5">
            <?php the_field('content'); ?>
          </div>
        </div>
        <div class="col-12 col-md-7">
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  get_footer();
?>
