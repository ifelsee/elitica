<a href="<?php the_permalink()?>">
<div class="Post-new">
    <div class="Post-new-img">
        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
    </div>
    <div class="Post-new-title">
        <p><?php the_title() ?></p>
    </div>
    <div class="Post-new-text">
        <p><?php the_excerpt()?></p>
    </div>
</div></a>