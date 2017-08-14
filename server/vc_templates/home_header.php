
<?php
 	extract( shortcode_atts( array(
		'main_text' => 'PROFESSIONAL RECRUITING <br>FOR FOREIGN COMPANIES <br>IN UKRAINE',
		'btn_text'=>'Get consulting'
		), $atts ) );
?>

	<section class="blocks_top" id='header'> 
		<div class="bottom_block">
			<h1><?php echo $main_text ?></h1>
			<button id="consultation" class="btn_consultation"><?php echo $btn_text ?></button>
		</div>
	</section>
	</header>
	<?php echo $this->endBlockComment('home_header'); ?>