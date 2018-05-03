<?php 
/**
Template Name: Our project


**/


get_header();
?>
<section>
    <div class="container">
      <div class="our-25">
        <h1>Our<span> Projects</span></h1>  
      </div>
      <div class="row project-space">
      <?php $sql = array('post_type'=>'ourprojects',
                           'post_status'=> 'publish',
                           'post_per_page'=>-1,);
                            $res = new WP_Query($sql);
                            while($res->have_posts()):$res->the_post();?>
        <div class="col-md-6 col-sm-6">
        
         <div class="purchase">
          <div class="purchase-img">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_field('pro_img'); ?>"></a>
          </div>
          <div class="purchase-text">
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php the_content(); ?></p>
          </div>

        </div>

      </div>
<?php endwhile; wp_reset_query(); ?>
     
      </div>
    </section>
<?php get_footer(); ?>