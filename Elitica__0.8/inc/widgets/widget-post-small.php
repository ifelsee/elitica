
<div class="Post-small" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
    <div class="Post-small-categories">
      <div class="Post-small-bg-blur"></div>
      <p><?php the_category()?></p>
    </div>
        <a href="<?php the_permalink()?>"> <div class="Post-small-content">
      <div class="Post-small-title">
        <h1><?php the_title()?></h1>
      </div>
      <div class="Post-small-text">
        <p><?php the_excerpt() ?> </p>
        </a>
      </div>
   </div>
    </div>