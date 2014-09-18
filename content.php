<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . get_permalink() . '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'stitch' ), the_title_attribute( 'echo=0' ) ) ) . '" rel="bookmark">', '</a></h1>' ); ?>
		<?php edit_post_link( __( 'Edit', 'stitch' ), '<span class="edit-link">', '</span>' ); ?>
	</header>

	<?php if ( is_search() ) :  ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'stitch' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'stitch' ), 'after' => '</div>' ) ); ?>
	</div>
	<?php endif; ?>
	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : ?>
			<?php stitch_posted_on(); ?>
			<?php
				
				$categories_list = get_the_category_list( __( ', ', 'stitch' ) );
				if ( $categories_list && stitch_categorized_blog() ) :
			?>
			<span class="sep"></span>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'stitch' ), $categories_list ); ?>
			</span>
			<?php endif; ?>
			<?php
				$tags_list = get_the_tag_list( '', __( ', ', 'stitch' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"></span>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'stitch' ), $tags_list ); ?>
			</span>
			<?php endif;  ?>
		<?php endif;  ?>
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="sep"></span>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'stitch' ), __( '1 Comment', 'stitch' ), __( '% Comments', 'stitch' ) ); ?></span>
		<?php endif; ?>
	</footer>
</article><?php the_ID(); ?>