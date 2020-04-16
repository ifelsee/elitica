<?php if (has_post_thumbnail()) : ?>

  <div class="Post-big" style=" background-image: url(<?php the_post_thumbnail_url('large'); ?>); width: 670px; height: 414px; background-position: center; background-repeat: no-repeat; border-radius: 10px;">
  <?php else : ?>
    <div class="Post-big" style=" background-image: url(https://image.flaticon.com/icons/png/512/23/23765.png); width: 670px; height: 414px; background-position: center; background-repeat: no-repeat; border-radius: 10px;">
    <?php endif; ?>
      <div class="Post-big-category">
        <p><?php the_category()?></p>
      </div>
    <a href="<?php the_permalink() ?>">
      <div class="Post-big-href">
      </div>
    </a>


  
    <a href="<?php the_permalink() ?>">
      <div class="Post-big-content">
        <h1><?php the_title(); ?></h1>
        <p id="Post-big-title"><?php the_excerpt() ?></p>

      </div>
    </a>
    <div class="Post-big-icon ">
    <?php if (esc_attr(get_option('twitter_url'))) : ?>
      <!--twitter-->
      <a href="<?php echo esc_attr( get_option( 'twitter_url' ) );?>">
        <i class="fab fa-twitter"></i>

      </a>
    <?php endif; ?>
    <?php if (esc_attr(get_option('facebook_url'))) : ?>

      <!--facebook-->
      <a href="<?php echo esc_attr( get_option( 'facebook_url' ) );?>">
        <i class="fab fa-facebook-f"></i>

      </a>
      <?php endif; ?>
      <?php if (esc_attr(get_option('Instagram_url'))) : ?>

      <!--instagram-->
      <a href="<?php echo esc_attr( get_option( 'Instagram_url' ) );?>">
        <i class="fab fa-instagram"></i>


      </a>
      <?php endif; ?>

    </div>
    <div class="Post-big-info">
      <p> <a href="author/<?php the_author_nickname() ?>"><?php the_author_link(); ?></a> | <?php the_time('F j, Y g:i ') ?></p>
    </div>
    </div>