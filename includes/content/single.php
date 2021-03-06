<div id="site-content">
	<?php while( have_posts() ) : the_post();

		do_action( 'before_page_content_ignite', $post );

		$show_title = get_post_meta( get_the_ID(), '_show_title_single_ignite', true );

		if ( empty( $show_title ) || ( 'default' === $show_title ) ) {

			$show_title = get_theme_mod( '_show_single_title_ignite', 'default' );

		} // end if

		$show_title = apply_filters( 'show_title_ignite', $show_title, $post );

	?>
	<article class="site-article">
		<header>
			<?php if ( 'remove' !== $show_title ) : ?><h1 class="<?php if ( 'hide' === $show_title ) { echo ' hidden-element'; } ?>"><?php the_title() ?></h1><?php endif ?>
		</header>
		<div class="article-content">
			 <?php the_content() ?>
		</div>
		<footer>
		<?php if ( comments_open() || get_comments_number() ) : ?>
     		<?php comments_template(); ?>
		<?php endif; ?>
		</footer>
	</article>
	<?php endwhile; ?>
</div>
