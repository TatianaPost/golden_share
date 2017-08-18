<?php
extract( shortcode_atts( array(
	'img' => 'image_url'
	), $atts ) );
	?>

	<div class="client_header" style="background-image: url('<?php echo  wp_get_attachment_image_src($img, "full")[0]; ?>');">
		<article class="content">


		</article>
	</div>

	<?php echo $this->endBlockComment('client_img'); ?>