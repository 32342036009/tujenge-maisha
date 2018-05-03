<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tujenge Maisha</title>
  <link href="<?= get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/font-awesome.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section class="top-backgund-img">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-2"></div>
      <div class="col-md-7 col-sm-10">
        <div class="backgrund-color">
          <div class="emil-sec">
           <ul>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@tujengemaisha.org"><?= get_option('twentyseventeen_email'); ?></a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+19257276609">+1 <?= get_option('twentyseventeen_call'); ?></a></li>
          </ul>
        </div>
        <div class="face-book">
          <ul>

            <li><a target="_blank" href="<?= get_option('twentyseventeen_twitter_link'); ?>"><i class="fa fa-twitter titter-color"></i></a></li>
            <li><a target="_blank" href="<?= get_option('twentyseventeen_facebook_link'); ?>"><i class="fa fa-facebook facebook-color"></i></a></li>
            <li><a target="_blank" href="<?= get_option('twentyseventeen_google_plus'); ?>"><img  src="<?= get_template_directory_uri();?>/assets/images/google.png"></a></li>
            <li><a target="_blank" href="<?= get_option('twentyseventeen_youtube'); ?>"><img  src="<?= get_template_directory_uri();?>/assets/images/you-tub.png"></a></li>

          </ul>
        </div>
      </div>
    </div> 
  </div>
</div>
</section>

<section class="header-fixd">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-12">
        <div class="logo">
          <a href="<?php the_permalink(5); ?>"><img  src="<?= get_option('twentyseventeen_logo'); ?>"></a>
        </div>
      </div>
      
      <div class="col-md-10 col-sm-10 col-xs-12 mobil">
        <div class="menu">
        <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">

            <a href="#" class="toggle-mnu hidden-lg navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span></span></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'theme_location'    => 'primary',
                                    'menu_class'        => 'nav navbar-nav',
                                    'menu_id'           => 'main-nav',
                                    'walker'            =>  new wp_bootstrap_navwalker()));?>
          </div>
        </nav>
      </div>
      </div>

    </div></div>
  </section>
  <?php if(is_page(5)){ ?>
  <section class="banner">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <?php $sql = array('post_type' =>'slider',
                                 'post_status'=>'publish',
                                 'posts_per_page'=>-1,); 
                                  ?>

            <?php $result= new WP_Query($sql); ?>
            <?php  $noOfTests = $result->post_count; ?>
      <ol class="carousel-indicators">

      <?php for($i=1; $i<=$noOfTests; $i++){ ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($count == 1){ echo 'active'; } ?>"></li>
       <?php }  ?> 
         </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
              
            <?php $no= 1;  while($result->have_posts()):$result->the_post(); ?>
        <div class="item <?php  if($no==1){echo "active"; }else{echo ""; } ?>">
          <div><?php the_post_thumbnail(); ?></div>
          <div class="carousel-caption">
            <h3><?php the_title(); ?></h3>
          </div>
        </div>

   <?php $no++; endwhile; wp_reset_query(); ?>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>
  <?php } else{ ?>
<section class="about-15">
   <div class="about">
    <?php the_post_thumbnail(); ?>
  </div>
    <div class="about-cont-us">
     <h1><?php the_title(); ?></h1>
 </div>
 </section>
 <?php   } ?>
<script type="text/javascript">
      jQuery(document).ready(function(){
        jQuery("li.dropdown>a").attr("data-toggle", "dropdown");
      });
    </script>