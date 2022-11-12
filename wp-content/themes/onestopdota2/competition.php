<?php
/*
 * Template Name: Competition Template
*/
	get_header();
?>

<section class="competition-banner-section bg-cover h-m95vh position-relative d-flex align-items-center" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
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

<section class="prize-distribution-section py-5">
  <div class="container">
    <div class="row" id="counter">

      <div class="title-holder col-12 text-center mb-5">
        <h2 class="theme color-white large-title font-Apercu-pro">Prize pool distribution</h2>
      </div>

      <div class="col-12 theme color-white mb-4">
        <h3 class="sub-section-title text-center">TOTAL POOL</h3>
        <p class="text-center large-text" data-count="7500">USD 
          <span class="counter-value" data-count="7500">0</span>
        </p>
        <div class="underline w-100 bottom position-relative border-bottom">
        </div>
      </div>

      <div class="col-12 theme color-white mb-4">
        <h3 class="sub-section-title text-center">First Place</h3>
        <p class="text-center large-text" data-count="8000">USD
          <span class="counter-value" data-count="3000">0</span>
        </p>
      </div>

      <div class="d-flex flex-wrap px-0 w-100 theme color-white">

        <div class="second-place col-12 col-sm-4 mb-4 text-center">
          <h3 class="sub-section-title">Second Place</h3>
          <p class="mb-0 large-text" data-count="8000">USD 
            <span class="counter-value" data-count="2000">0</span>
          </p>
        </div>

        <div class="third-place col-12 col-sm-4 mb-4 text-center">
          <h3 class="sub-section-title">Third Place</h3>
          <p class="mb-0 large-text" data-count="8000">USD 
            <span class="counter-value" data-count="1000">0</span>
          </p>
        </div>

        <div class="fourth-place col-12 col-sm-4 mb-4 text-center">
          <h3 class="sub-section-title">Fourth Place</h3>
          <p class="mb-0 large-text" data-count="8000">USD 
            <span class="large-text counter-value" data-count="750">0</span>
          </p>
        </div>
      </div>

      <div class="col-12 text-center mb-4">
        <h3 class="sub-section-title">FIFTH PLACE</h3>
        <div class="d-flex justify-content-around">
            <p class="large-text mb-0 d-flex justify-content-center font-BasicalineRegular theme color-white" data-count="8000">USD 
              <span class="large-text pl-2 cust-margin font-BasicalineRegular theme color-white d-flex justify-content-center counter-value" data-count="500">0</span>
            </p>
        </div>
      </div>

      <div class="col-12 text-center mb-4">
        <h3 class="sub-section-title">SIXTH PLACE</h3>
        <div class="d-flex justify-content-around">
            <p class="large-text mb-0 d-flex justify-content-center font-BasicalineRegular theme color-white" data-count="8000">USD 
              <span class="large-text pl-2 cust-margin font-BasicalineRegular theme color-white d-flex justify-content-center counter-value" data-count="250">0</span>
            </p>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="competition-content-section py-5 position-relative" style="background-image: url('<?php the_field('brackets_bg'); ?>')">
  <div class="theme bg-mid-black-opa position-absolute w-100 h-100 top">
  </div>
	<div class="container py-5">
		<div class="justify-content-center row position-relative z-index-2">
      <div class="title-holder">
       <h2 class="text-center theme color-white large-title font-Apercu-pro">COMPETITION DETAILS</h2>
		  <h5 class="text-center theme color-white large-title font-Apercu-pro font-italic"><a href="http://onestopdota2.com/rulebook/">Rule Book</a></h5>
      </div>
	    <div class="content-holder theme color-dark-brown mb-4 pr-lg-5 col-12">
	        <?php the_content(); ?>
	    </div>
		</div>
	</div>
</section>

<?php
  get_footer();
?>