<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Portfolio_Alex
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			$portfolioColor = get_field('color');
			if(empty($portfolioColor)){
				$portfolioColor = "red";
			}
			$portfolioClient = get_field('client');

			$champs = get_fields();
			var_dump($champs);

			the_title();
			the_content();

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
