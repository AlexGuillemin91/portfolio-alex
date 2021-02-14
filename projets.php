<?php

/**
 * Template Name: Projets
 */

get_header();
?>

<main class="main-projet">

	<?php $loop = new WP_Query(array('post_type' => 'projet', 'posts_per_page' => '10')); ?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>

		<article>
			<img src="<?= get_field("image")['url']; ?>" />
			<div>
				<h3><?= the_title(); ?></h3>
				<p><?= get_field("description"); ?></p>
				<div class="lien">
					<a href="<?= get_field("lien"); ?>">Lien du site</a>
				</div>
			</div>
		</article>
	<?php endwhile; ?>

</main>
</body>

</html>