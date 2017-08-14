			
					<?php
extract( shortcode_atts( array(
 
	'title' => 'НАШИ КЛИЕНТЫ', 
 
	), $atts ) );
	?>
	

				<section class="before-client	">
					<h2><?php echo $title; ?></h2>
				</section>

				<?php echo $this->endBlockComment('home_before_client'); ?>