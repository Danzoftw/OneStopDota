<?php
  get_header();
?>

<section class="new-banner-section py-5 bg-cover h-m95vh position-relative d-flex align-items-center" style="background-image: url('<?php the_field('page_banner', 193); ?>')">
  <div class="theme bg-mid-black-opa position-absolute w-100 h-100 top">
  </div>
  <div class="container">
    <div class="row">
      <div class="title-holder col-12 mb-4">
        <h1 class="theme color-white large-title font-Apercu-pro"><?php the_field('page_title', 193); ?></h1>
      </div>
      <div class="content-holder mb-4 pr-lg-5 col-12">
        <?php the_field('page_content', 193); ?>
      </div>
    </div>
  </div>
</section>

<section class="news-section theme bg-white py-5">
  <div class="container">
    <div class="row">
      
      <div class="news-slider d-flex flex-wrap w-100">
        <?php
            $args=array(
              'posts_per_page' => -1, 
              'post_type' => 'upcoming',
              'post_status'=>'publish',
              'order'=>'DESC'
            );
            $query = new WP_Query( $args );
            if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        ?>
          <div class="single-new-holder col-12 col-sm-6 col-md-4 py-5">
            <a href="<?php echo get_permalink(); ?>" class="theme bg-mid-black-opa d-block bg-cover single-news outline-none border-0 p-3 px-4 py-5 button position-relative cursor-pointer h-100" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
              <div class="text-holder left text-center w-100 position-absolute">
                <h4 class="font-Circular-light theme color-white"><?php the_title(); ?></h4>
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
  </div>
</section>

<?php
  get_footer();
?>