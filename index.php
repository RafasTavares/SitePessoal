<?php
get_header(); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
			<?php if ( have_posts() ) : ?>
				<?php stitch_content_nav( 'nav-above' ); ?>
				<?php?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>
				<?php stitch_content_nav( 'nav-below' ); ?>
			<?php else : ?>
				<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif; ?>
			</div>
		</div>
<?php get_footer(); ?>