<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();?>
<section>
 <div class="container">
  <div class="row about-mar-top">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <div class="construction-of-infrastructure">
        <h3><?php the_title(); ?></h3> 
        <p><?php the_content(); ?></p>
		</div>
    </div>
 <div class="col-md-=3 col-sm-3 col-xs-12">
      <div class="construction-of-infrastructure-img">
       <img src="<?php echo get_field('pro_img'); ?>">
      </div>
    </div>
  <?php endwhile; ?>
  </div>
  </div>
</section>
<?php get_footer();