
<?php
extract( shortcode_atts( array(

	'title' => 'НАШИ КЛИЕНТЫ', 

	), $atts ) );
	?>
<div class="client_wrapper">
	<section class="client content">
		<div class="client_courusel">


			<?php 
 

			$args = array(
	'post_type' => 'client'
);

$query = new WP_Query( $args );

			while ( $query->have_posts() ) {
		$query->the_post();

				?>

				<div>
					<div class="client_courusel_item" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
						 
					</div>

				</div>

				<? }  ?>
 

			</div>
		</section>
</div>
		<?php echo $this->endBlockComment('home_client'); ?>