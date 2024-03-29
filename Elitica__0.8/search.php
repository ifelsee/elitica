<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Elitica
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						/* translators: %s: search query. */
						printf(esc_html__('Search Results for: %s', 'elitica'), '<span>' . get_search_query() . '</span>');
						?>
				</h1>
			</header><!-- .page-header -->
			<?php  ?>

		<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();

				if ('post' === get_post_type()) :
					get_template_part('inc/widgets/widget-post', 'medium');
				endif;

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
