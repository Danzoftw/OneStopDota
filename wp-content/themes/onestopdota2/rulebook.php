<?php
/*
 * Template Name: Rulebook Template
*/
	get_header();
?>

<section class="rulebook-banner-section bg-cover h-m95vh position-relative d-flex align-items-center" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
  <div class="theme bg-mid-black-opa position-absolute w-100 h-100 top">
  </div>
  <div class="container">
    <div class="row">
      <div class="title-holder col-12 mb-4">
        <h1 class="theme color-white large-title font-Apercu-pro"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>


<section class="rulebook-content-section py-5 position-relative">
	<div class="container">
		<div class="row">
	    <div class="content-holder theme color-white mb-4 pr-lg-5 col-12">
	        <?php the_content(); ?>
	    </div>
		</div>
	</div>
</section>

<?php
  get_footer();
?>