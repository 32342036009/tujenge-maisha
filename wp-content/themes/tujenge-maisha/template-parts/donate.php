<?php
/**
Template Name: Donate
**/
get_header();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Donate</title>
</head>
<body>
	<section class="back-color">
 <div class="container">
    <div class="row">
<div class="donote">
  <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since
  </p>
	
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input name="cmd" type="hidden" value="_donations">
<input name="business" type="hidden" value="tujengemaisha2012@gmail.com">
<input name="item_name" type="hidden" value="America Express">
<input name="no_shipping" type="hidden" value="0">
<input name="no_note" type="hidden" value="1">
<input name="currency_code" type="hidden" value="USD">
<input name="tax" type="hidden" value="0">
<input name="bn" type="hidden" value="PP-DonationsBF">
<input class="shadow-mg" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" type="image">
<img src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0">
</form>
	</div>

    </div></div>
 </section>



<?php get_footer(); ?>
</body>
</html>


