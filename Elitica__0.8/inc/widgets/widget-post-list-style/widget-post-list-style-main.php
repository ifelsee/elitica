  <?php
    $bigPost = 0;
    $smallPost = 0;
    $mediumPost = 0;
    $listPostNumber = 0;
    $newPostList = 0;
    $post_max = 0;

    while (have_posts()) :
    $listPostNumber ++;

      the_post();
    if ( $listPostNumber <= 10) :
        if ( $bigPost < 1) :
          get_template_part('inc/widgets/widget-post', 'big');
          $bigPost++;

        elseif ( $smallPost < 2) :
          get_template_part('inc/widgets/widget-post', 'small');
          $smallPost++;
          

        elseif ( $mediumPost < 6) :
          get_template_part('inc/widgets/widget-post', 'medium');
          $mediumPost++;


        else :
          ?> <br><?php
        endif;
      

          

          else :
            if ($post_max < 5) {
              # code... 
            $bigPost = 0;
            $smallPost = 0;
            $mediumPost = 0;
            $listPostNumber = 0;
            $newPostList = 0;
            $post_max++;
            } else {
              
            }
           
    endif;
  


    endwhile;
    ?>
