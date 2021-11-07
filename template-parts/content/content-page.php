<div class="entry-content sub-container">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'unsworththeme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

