<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elitica
 */

?>
</div>
<div class="Page-single">
	<div class="Page-singel-content-title">
		
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>
<div class="Page-singel-content-thumbnail">
		<?php the_post_thumbnail('full'); ?>
		</div>
	</div>
	<div class="Page-single-content">
		<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">


				<div class="Page-singel-content-meta">
					<?php


					if ('postt' === get_post_type()) :
						?>
						<div class="entry-meta">
							<div class="avatar">
								<?php echo get_avatar(get_the_author_meta('ID')); ?>
							</div>
							<div class="author-fullname">
								<h4><?php the_author_link() ?></h4>
							</div>
							<div class="post-date">
								<a href=""><?php the_time('D j, Y g:i ') ?></a>
							</div>
							<div class="author-role">
								<p>
									<?php echo get_author_role() ?>
								</p>
							</div>
						</div> <!-- .entry-meta -->
					<?php endif; ?>
				</div>


			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				the_content(sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'elitica'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()

				));

				wp_link_pages(array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'elitica'),
					'after'  => '</div>',
				));
				?>
			</div><!-- .entry-content -->
			<footer class="entry-footer">

				<div class="Author-avatar">
					<div class="Author-avatar-photo">
						<img src="<?php echo wp_get_attachment_url(get_theme_mod('elitca-author-area-avatar-image')); ?>" alt="">
					</div>
					<div class="Author-avatar-full-name">
						<p><?php echo get_theme_mod('elitca-author-area-headline'); ?></p>
					</div>
					<div class="Author-avatar-description">
						<p><?php echo get_theme_mod('elitca-author-area-text'); ?></p>
					</div>
				</div>
				<?php elitica_entry_footer(); ?>
				<div class="comments-navigation-area">

					<?php
					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>



				</div>
			</footer><!-- .entry-footer -->
		</main><!-- #post-<?php the_ID(); ?> -->
	</div>
	<?php get_sidebar()?>

</div>

<?php get_footer() ?>