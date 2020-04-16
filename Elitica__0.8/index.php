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
 * @package Elitica
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php
    if (have_posts()) :

      if (is_home() && !is_front_page()) :

        ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
      <?php
        endif;
        /* Start the Loop */

        ?>


      <div class="container-a">
        <!-- Codrops top bar -->
        <?php
          $sliderPost = 0;
          if (wp_count_posts()->publish > 3) :
            ?>
          <section id="dg-container" class="dg-container">

            <nav class="dg-btn">
              <span class="dg-prev">
                <p>&lt;</p>
              </span>
              <span class="dg-next">
                <p>&gt;</p>
              </span>
            </nav>

            <div class="dg-wrapper">
              <?php
                  while (have_posts()) :
                    the_post();
                    if ($sliderPost < 5) {
                      $sliderPost++;

                      get_template_part('inc/widgets/widget-post', 'big');
                    } 
                  endwhile;

                  ?>

            </div>

          </section>
      </div>
    <?php
      else :
      endif;
      ?>

    <!--Post Area-->
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
          ?>
        <!-- sidebar -->

      </div>
      <div class="widget-area">
        <?php
          get_sidebar();
          ?>
      </div>
    <?php








    else :


    endif;


    get_footer();
