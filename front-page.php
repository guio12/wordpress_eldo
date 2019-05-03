<?php 

get_header(); // This fxn gets the header.php file and renders it ?>

	<div id="primary" class="row-fluid">
	<?php

$args = array(
	'post_type'              => 'page',
	'post_status'			 => 'publish',
	'orderby'				 => 'menu_order',
	'order'					 => 'ASC'
);

$query = new WP_Query($args);



if (have_posts()) : while ($query->have_posts()) : $query->the_post();
	switch($post->post_name) {
		case 'parcours':
			get_template_part('templates/page-parcours');
			break;
		case 'prestations':
			get_template_part('templates/page-prestations');
			break;
		case 'specialisations':
			get_template_part('templates/page-specialisations');
			break;
		case 'realisations':
			get_template_part('templates/page-realisations');
			break;
		case 'contact':
			get_template_part('templates/page-contact');
			break;
	}
endwhile;endif;
?>
			
			</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>