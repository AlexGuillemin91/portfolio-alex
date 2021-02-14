<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Alex
 */

get_header();
?>

<main class="main-home">
	<div class="accueil">
		<h2>home page</h2>
	</div>
	<div class="presentation">
		<img src="wp-content/themes/portfolio-alex/img/alex.PNG" alt="Alex Guillemin">
		<div>
			<h3>Bonjour et bienvenue dans mon portfolio !</h3>
			<p>Mon nom est Alex Guillemin,
				étudiant en 2ème année de Bachelor en développement web.
				Vous pourrez trouver ici mes différents projets ainsi que différents moyens de me contacter.</p>
			<h4>Bonne visite !</h4>
			<div class="button-infos">
				<a href="localhost/wordpress/informations">Informations</a>
			</div>
		</div>
	</div>
</main>
</body>

</html>