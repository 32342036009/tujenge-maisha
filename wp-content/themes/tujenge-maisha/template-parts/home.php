<?php 
/**
Template Name: Home


**/


get_header();
?>
<section>
    <div class="container">
      <div class="our-25">
        <h1>Our<span> Projects</span></h1>  
      </div>
      <div class="row">
      <?php $sql = array('post_type'=>'ourprojects',
                           'post_status'=> 'publish',
                           'post_per_page'=>-1,);
            $res = new WP_Query($sql);
            while($res->have_posts()):$res->the_post();?>
        <div class="col-md-6 col-sm-6">
        
         <div class="purchase">
          <div class="purchase-img">
            <img src="<?php echo get_field('pro_img'); ?>">
          </div>
          <div class="purchase-text">
            <h5><?php the_title(); ?></h5>
            <p><?php the_content(); ?></p>
          </div>

        </div>

      </div>
<?php endwhile; wp_reset_query(); ?>
     
      </div>
    </section>

    <section class="about-us-bac">         
           <div class="left-ablot">
            <img src="<?php echo get_field('image',7); ?>" >
           </div>
		<div class="about-25">
            <h3>About <span>Us</span></h3>
            <?php echo get_field('home_page_about_us_section',7); ?>
              <a href="<?php the_permalink(7); ?>">Read More</a>

            </div>

         

       
      </section>

      <section>
        <div class="clr"></div>

        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="face-book-2">
                <h2>FACEBOOK</h2>
                <a target="_blank" href="https://www.facebook.com/tujengemaisha/"><img  src="<?= get_template_directory_uri();?>/assets/images/face-book.jpg"></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="twer-book-2">
               <h2>Twitter</h2>
              <a target="_blank" href="https://twitter.com/tujengemaisha"> <img  src="<?= get_template_directory_uri();?>/assets/images/twe-book.jpg"></a>
             </div></div>
           </div></div>
         </section>

         <section>

          <div class="container">
            <div class="video-25">
              <h4>Our <span>Videos</span></h4>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="video-1"><?= get_option('twentyseventeen_firstyoutube'); ?>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="video-2"><?= get_option('twentyseventeen_secondyoutube'); ?></div>

              </div>

            </div></div>
          </section>

          <section class="donet-35">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-sm-12">
                  <div class="loren-25"><h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5></div>
                </div>
                <div class="col-md-2 col-sm-12">
                  <div class="don25"><a href="<?php the_permalink(21); ?>">Donate</a></div>
                </div>
              </div></div>
            </section>
<?php get_footer(); ?>