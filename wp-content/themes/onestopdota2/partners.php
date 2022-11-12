<?php
/*
 * Template Name: Partners Template
*/
	get_header();
?>

<section class="our-dna-banner-section bg-cover h-m95vh position-relative d-flex align-items-center" style="background-image: url('<?php the_field('banner_image'); ?>')">
  <div class="theme bg-mid-black-opa position-absolute w-100 h-100 top">
  </div>
  <div class="container">
    <div class="row">
      <div class="title-holder col-12 mb-4">
        <h1 class="theme color-white large-title font-Apercu-bold"><?php the_field('banner_title'); ?></h1>
      </div>
      <div class="content-holder mb-4 pr-lg-5 col-12">
        <?php the_field('banner_content'); ?>
      </div>
    </div>
  </div>
</section>


<section class="partners-section theme bg-white py-5 position-relative">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 partner-holder d-flex flex-wrap justify-content-center" data-aos="fade-up" data-aos-offset="300">
				<?php
					if( have_rows('partners') ):while ( have_rows('partners') ) : the_row();
				?>
					<div class="single-partner col-6 col-sm-4 col-lg-3 align-self-center mb-4">
						<img class="w-100 px-4" src="<?php the_sub_field('image'); ?>">
					</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</section>

<?php
  get_footer();
?>