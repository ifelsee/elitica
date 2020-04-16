

<div class="Post-medium">
   <a href="<?php the_permalink()?>"> <div class="Post-medium-img">
        <?php if (has_post_thumbnail()) : ?>

            <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="">
        <?php else : ?>
            <img src="https://image.flaticon.com/icons/png/512/23/23765.png" alt="">
        <?php endif; ?>
    </div>
    <div class="Post-medium-category">
        <p><?php the_category()?></p>
    </div>
    <a href="<?php the_permalink()?>"><div class="Post-medium-title">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="Post-medium-text">
        <?php the_excerpt() ?>
    </div>
    </a>
    <div class="Post-medium-data">
        <p> <a href="author/<?php the_author_nickname() ?>"><?php the_author_link(); ?></a> | <?php the_time('F j, Y g:i ')?></p>
    </div>
</div>