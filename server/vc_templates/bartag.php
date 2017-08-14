
<?php
 	extract( shortcode_atts( array(
		'style' => 'Title',
		'style2'=>'499'
		), $atts ) );
?>

<div class="<?php echo esc_attr( $css_class ); ?>">
    I am bartagfsdafds <?php echo $style ?> <br>
    <?php echo $style2 ?>
</div><?php echo $this->endBlockComment('bartag'); ?>