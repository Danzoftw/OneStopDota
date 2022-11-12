<?php
/*
 * Template Name: Home Template
*/
get_header();
?>

<section class="home-banner-section position-relative">
	<div class="how-can-we-help-you position-absolute z-index-2 d-none d-lg-block large-text">
		<a href="<?php the_field('how_can_we_help_link'); ?>">how can we help you?</a>
	</div>
	<div class="slider-holder h-m100vh">
		<div class="position-relative d-flex justify-content-end align-items-end h-m100vh bg-cover" style="background-image: url('<?php the_field('banner_image'); ?>')">
			<div class="container mb-5">
				<div class="row px-3 justify-content-center text-center">
					<div class="banner-content-holder position-relative z-index-2">
						<div class="banner-text justify-content-center">
							<h3 class="constant-text theme color-white font-Apercu-medium section-title-large mb-0 position-relative title-pretext-style"><?php the_field('banner_text'); ?></h3>
						</div>
						<?php
							if(the_field('button_text')){
						?>
							<div class="button-holder mt-3 pl-lg-5">
								<a href="<?php the_field('button_url'); ?>" class="theme color-white bg-light-blue outline-none border-0 p-3 pl-4 pr-6 button position-relative border-radius-0 cursor-pointer">
									<?php the_field('button_text'); ?>
									<span class="arrow-right-15"></span>
								</a>
							</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="purpose-section position-relative py-5 theme bg-white" id="purpose_section" >
	<div class="container py-sm-5">
		<div class="row">
			<div class="col-12 d-flex flex-wrap px-0 px-lg-3">
				<div class="col-12 col-md-7 text-holder">
					<h5 class="theme color-mid-black section-title-large font-Apercu-regular m-0">what is</h5>
					<h2 class="theme color-mid-black large-title font-Apercu-pro"><?php the_field('purpose_title'); ?></h2>
					<div class="content-holder mb-3 theme color-mid-black font-HK-Grotesk-medium">
						<?php the_field('purpose_text'); ?>
					</div>
				</div>
				<div class="col-12 col-md-5 image-holder">
					<img class="img1 w-100" src="<?php the_field('purpose_image'); ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="connect-section position-relative py-5" id="connect_section" style="background-image: url('<?php the_field('connect_with_us_bg'); ?>')">
	<div class="container py-5">
		<div class="row">
			<div class="section-title col-12 text-center">
				<h2 class="theme color-white large-title font-Apercu-pro mb-4"><?php the_field('connect_with_us_title'); ?></h2>
			</div>
			<div class="social-links col-12 d-flex justify-content-center align-items-center">
				<?php
					if( have_rows('connect_with_us_links') ):while ( have_rows('connect_with_us_links') ) : the_row();
				?>
					<div class="single-media">
						<a class="fs-3rem mx-3" href="<?php the_sub_field('links'); ?>">
							<?php the_sub_field('image'); ?>
						</a>
					</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</section>

<section class="news-section theme bg-white py-5" id="news_section">
	<div class="container py-5">
		<div class="row">
			<div class="title-holder col-12">
				<h2 class="theme color-dark-brown large-title font-Apercu-pro mb-5"><?php the_field('dota_world_title'); ?></h2>
			</div>
			<?php
			    $args=array(
			      'posts_per_page' => 3, 
			      'post_type' => 'news',
			      'post_status'=>'publish',
			      'order'=>'DESC'
			    );
			    $query = new WP_Query( $args );
			    if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
			?>
				<div class="single-new-holder col-sm-4">
					<a href="<?php echo get_permalink(); ?>" class="d-block bg-cover single-news outline-none border-0 p-3 px-4 button position-relative cursor-pointer" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
						<div class="text-holder">
							<h4 class="font-Circular-light theme color-dark-brown"><?php the_title(); ?></h4>
						</div>
					</a>
				</div>
			<?php
			    endwhile;
			    endif;
			    wp_reset_query();
			?>
		</div>
	</div>
</section>

<!-- <section class="upcoming-tournament-section theme bg-dark-drown py-5" id="upcoming_tournaments_section">
	<div class="container py-3 py-sm-5">
		<div class="row">
			<div class="col-12 title-holder mb-5">
				<h2 class="theme color-mid-black section-title font-HK-Grotesk-medium text-lowercase m-0 text-center"><?php the_field('our_clients_title'); ?></h2>
			</div>
			<div class="col-12 logo-holder d-flex flex-wrap justify-content-center">
				<?php
					if( have_rows('clients') ):while ( have_rows('clients') ) : the_row();
				?>
					<a class="mx-3 mx-lg-5 mb-5" href="<?php the_sub_field('link'); ?>">
						<img src="<?php the_sub_field('image'); ?>">
					</a>
				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</section> -->

<?php
	get_footer();
?>