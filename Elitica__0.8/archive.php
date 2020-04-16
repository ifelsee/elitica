<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elitica
 */

get_header();


?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">


		<div class="container-a">
		
			<?php if (get_theme_mod( 'elitca-author-area-display' ) =='Yes') :
			?>
		
		<div class="Profile-main">
				<div class="Profile-bg" style="background-image: url()">
					<img src="<?php echo wp_get_attachment_url(get_theme_mod('elitca-author-area-bg-image')); ?> " alt="">
				</div>
				<div class="Profile-avatarMain">
					<div class="Profile-avatar">
						<img src="<?php echo wp_get_attachment_url(get_theme_mod('elitca-author-area-avatar-image')); ?> " alt="">
					</div>

				</div>
				<div class="Profile-fullName">
					<p><?php echo get_theme_mod('elitca-author-area-headline'); ?></p>


				</div>
				<div class="Profile-description">
					<p><?php echo get_theme_mod('elitca-author-area-text'); ?></p>



				</div>

				<div class="Profile-icon">
					<!--twitter-->
					<a href="">
						<i class="fab fa-twitter fa-lg"></i>
					</a>

					<!--facebook-->
					<a href="">
						<i class="fab fa-facebook-f fa-lg"></i>
					</a>
					<!--instagram-->
					<a href="">
						<i class="fab fa-instagram fa-lg"></i>
					</a>
				</div>
				<div class="Profile-nav">
					<a href="#"> Home </a>
					<a href="#"> Post </a>
					<a href="#"> About Me </a>
				</div>
			</div>

			<?php endif; if (have_posts()) : ?>

				<header class="page-header">

				</header><!-- .page-header -->



				<div class="Post-list-standard">
					<div class="ads-area">

					</div>

					<div class="Post-list-standard-main">

					<?php

						$postNumber = 0;
						while (have_posts()) :
							the_post();

							if (wp_count_posts()->publish > 1 && $postNumber == 0) :

								get_template_part('inc/widgets/widget-post-list-style/widget-post-list-style', 'main');

								$postNumber++;

							else :

							endif;

						endwhile;
					endif;

					?>
					<!-- sidebar -->

					</div>
					<div class="widget-area">
						<?php
						get_sidebar();
						?>
					</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
