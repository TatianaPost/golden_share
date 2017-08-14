
<?php
 	extract( shortcode_atts( array(
		'fliping_text' => 'Title' 
		), $atts ) );
 	vc_add_shortcode_param('my_param', 'my_param_settings_field', get_template_directory_uri().'/vc_extend/flip.js');
?>

<div class="<?php echo esc_attr( $css_class ); ?>">
    I am bartag2   <br>
    <?php echo $fliping_text ?>
</div><?php echo $this->endBlockComment('bartag'); ?>