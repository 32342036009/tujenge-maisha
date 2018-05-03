<?php
/**
Template Name: Our Team

**/
get_header();
?>
<section class="our-top">
<div class="container">

  <?php $sql = array('post_type'=>'our_team',
                           'post_status'=> 'publish',
                           'post_per_page'=>-1,);
                            $res = new WP_Query($sql);
                            while($res->have_posts()):$res->the_post();?>
	<div class="row">
<div class="col-md-3 col-sm-3">
<div class="our-img">
                   <img src="<?php echo get_field('our_team'); ?>">
                  </div>
</div>
<div class="col-md-9 col-sm-9">
<div class="our-text">
<h5><?php the_title(); ?></h5>
<p><?php echo wp_trim_words( get_the_content(), 100 ); ?></p>
<a href="<?php the_permalink(); ?>">Read More</a>
</div>
</div>
</div>
<?php  endwhile; wp_reset_postdata(); ?>


</div>
</section>
<?php get_footer(); ?>
