				
<?php
extract( shortcode_atts( array(

	'title' => 'МЫ НАЙДЕМ ТОГО, <br>	
			КТО ВАМ НУЖЕН!', 

	), $atts ) );
	?>

	<section class="finde">
		<h2>
			<?php echo $title; ?>
		</h2>
		</section>

		<?php echo $this->endBlockComment('home_finde'); ?>