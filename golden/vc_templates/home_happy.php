		<?php
extract( shortcode_atts( array(
	'main_text' => '100% ДОВОЛЬНЫХ КЛИЕНТОВ. <br>
				КАК МЫ ДОСТИГАЕМ ТАКИХ <br>
				РЕЗУЛЬТАТОВ?', 
	), $atts ) );
	?>
 
		<section class="happy">
			<h1><?php echo $main_text ?>
			</h1>
		</section>

		<?php echo $this->endBlockComment('home_happy'); ?>