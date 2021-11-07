<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main>
	</div>

<?php
get_footer();
