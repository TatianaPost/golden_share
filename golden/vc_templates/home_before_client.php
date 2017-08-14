			
					<?php
extract( shortcode_atts( array(
 
	'title' => 'НАШИ КЛИЕНТЫ', 
 
	), $atts ) );
	?>
	
<div class="client_wrapper">
				<section class="before-client	">
					<h2><?php echo $title; ?></h2>
				</section>
</div>
				<?php echo $this->endBlockComment('home_before_client'); ?>