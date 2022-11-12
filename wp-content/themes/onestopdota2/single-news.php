<?php
	get_header();

	while (have_posts()): the_post();
?>

<section class="single-story-section my-5 py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="small-banner-holder bg-cover d-flex flex-column justify-content-end pt-5 mb-5" style="background-image: url('<?php the_field('banner_image'); ?>')">
          <div class="pt-5 mt-5">
            <div class="pt-5 mt-5">
              <div class="bg-text-holder theme gradient-black-gradient py-5 px-3">
                <div class="title-holder">
                  <h1 class="theme color-light-blue larger-text font-Apercu-bold mb-0"><?php the_title(); ?></h1>
                </div>
                <div class="date-and-author d-flex font-HK-Grotesk-medium large-text">
                  <!-- <div class="date-holder pr-2">
                    <?php echo get_the_date('d.m.Y'); ?>
                  </div>
                  <span >|</span> -->
                  <div class="author-holder pl-2">
                    <?php the_author(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-holder">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="comments-section my-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 comment-holder">
        <h4>Leave a comment</h4>
        <?php
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        ?>
    </div>
  </div>
</section>

<?php
  endwhile;
	get_footer();
?>
