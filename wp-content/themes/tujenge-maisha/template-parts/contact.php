<?php 
/**
Template Name: Contact


**/


get_header();
?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="cont-back">
<div class="container">
<div class="row contac-page-2">
<div class="col-md-6 col-sm-6 col-xs-12">
<h6>Write Us</h6>
<?php echo do_shortcode('[contact-form-7 id="101" title="contact us"]'); ?>
<p></p></div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="cont-add">
<h6>Contact Us</h6>
<ul>
<li><i class="fa fa-map-marker footer" aria-hidden="true"></i><?= get_option('twentyseventeen_address'); ?></li>
<li><i class="fa fa-phone footer" aria-hidden="true"></i> <a href="tel:+19257276609">+1<?= get_option('twentyseventeen_call'); ?></a></li>
<li><i class="fa fa-envelope-o footer" aria-hidden="true"></i> <a href="mailto:info@tujengemaisha.org" class="active"><?= get_option('twentyseventeen_email'); ?></a></li>
</ul></div>
</div></div>
</div>
</section>
<div class="map"><?= get_option('twentyseventeen_map'); ?></div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>



<?php get_footer(); ?>