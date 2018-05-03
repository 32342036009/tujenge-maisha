<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<section class="foter-back">
             <footer>
              <div class="container">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <h6>Navigation</h6>
                    <div class="footer-nav">
                       <?php wp_nav_menu( array(
                                    'menu'              => 'footer1',
									'menu_class'        => 'footer-menu',
                                    'theme_location'    => 'primary',));?>
                     </ul>
                   </div>
                 </div>
                 <div class="col-md-4 col-sm-4">
                  
                  <div class="fot-add">
                    <h6>Contact Us</h6>
                    <ul>
                     <li><i class="fa fa-map-marker footer" aria-hidden="true"></i> LoremIpsumis simply dummy text</li>
<li><i class="fa fa-phone footer" aria-hidden="true"></i> <a href="tel:+19257276609">+1 <?= get_option('twentyseventeen_call'); ?></a></li>
                     <li><i class="fa fa-envelope-o footer" aria-hidden="true"></i> <a href="mailto:info@tujengemaisha.org"><?= get_option('twentyseventeen_email'); ?></a></li>
                   </ul>
                 </div>
               </div>
               <div class="col-md-4 col-sm-4">
               
                <div class="fot-social">
                   <h6>Connect With Us</h6>
                 <ul>

            <li><a target="_blank" href="<?= get_option('twentyseventeen_twitter_link'); ?>"><i class="fa fa-twitter titter-color"></i></a></li>
            <li><a target="_blank" href="<?= get_option('twentyseventeen_facebook_link'); ?>"><i class="fa fa-facebook facebook-color"></i></a></li>
            <li><a target="_blank" href="<?= get_option('twentyseventeen_google_plus'); ?>"><img  src="<?= get_template_directory_uri();?>/assets/images/google.png"></a></li>
            <li><a target="_blank" href="<?= get_option('twentyseventeen_youtube'); ?>"><img  src="<?= get_template_directory_uri();?>/assets/images/you-tub.png"></a></li>

          </ul>
               </div>
             </div>
             <div class="copy">
              <p><?=get_option(twentyseventeen_copyright); ?></p>
            </div>
          </div></div>


        </footer>
      </section>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="<?= get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>

      
      <script>
      $(document).ready(function(){
        $('ul li a').click(function(){
          $('li a').removeClass("active");
          $(this).addClass("active");
        });
      });
      </script>

        <script>

      var nav = $('body');
 $(window).scroll(function () {
     if ($(this).scrollTop() > 59) {
         nav.addClass("custom_header_fixed");
     }
     else {
         nav.removeClass("custom_header_fixed");
     }
 });

   </script>
 
<?php wp_footer(); ?>

</body>
</html>
