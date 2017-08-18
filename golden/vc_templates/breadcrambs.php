<?php
extract( shortcode_atts( array( 
	'scale_right' => '100%',
	), $atts ) );
	?>
	
<div class="breadcrumbs_wrapper">
               <?php  get_breadcrumbs(); ?> 
           </div>


	<?php echo $this->endBlockComment('client_desc'); ?>