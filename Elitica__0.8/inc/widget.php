<?php

/**
 * Widget Class
 *
 *
 * @package Elitica
 */





class Elitica_Latest_Articles_Widget extends WP_Widget
{

    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'elitica_latest_articles-widget',
            'description' => 'Custom Elitica Latest Articles Widget',
        );
        parent::__construct('elitica_latest_articles', 'Elitica Latest Articles', $widget_ops);
    }

    function form($instance)
    {

        $defaults = array(
            'number' => '-1'
        );
        $depth = $instance['number'];

        // markup for form 
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>">please enter the number of posts you want to list</label>
            <input class="widefat" type="number" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo esc_attr($depth); ?>">
        </p>

        <?php
            }

            public function widget($args, $instance)
            {
                extract($args);

                $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);

                if (empty($instance['number']) || !$number = absint($instance['number']))
                    $number = 10;

                $r = new WP_Query(apply_filters('widget_posts_args', array('posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true)));
                if ($r->have_posts()) :
                    ?>
            <div class="Post-new-list">
                <div class="Post-new-list-title">
                    <p><?php echo $title; ?></p>
                </div>
                <div class="Post-new-list-span">

                    <?php
                                echo $before_widget;
                                ?>
                    <ul>
                        <?php while ($r->have_posts()) : $r->the_post(); ?>
                            <a href="<?php the_permalink() ?>">
                                <div class="Post-new">
                                    <div class="Post-new-img">
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                                    </div>
                                    <div class="Post-new-title">
                                        <p><?php the_title() ?></p>
                                    </div>
                                    <div class="Post-new-text">
                                        <p><?php the_excerpt() ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </ul>


                </div>
            </div>
        <?php
                    echo $after_widget;

                    wp_reset_postdata();

                endif;
            }
        }
        add_action('widgets_init', function () {
            unregister_widget('WP_Widget_Recent_Posts');
            register_widget('Elitica_Latest_Articles_Widget');
        });





        // Custom Elitica Article Post 2 
        class Elitica_Latest_Articles_2_Widget extends WP_Widget
        {

            public function __construct()
            {
                $widget_ops = array(
                    'classname' => 'Elitica_Latest_Articles_2-widget',
                    'description' => 'Custom Elitica Latest Articles 2 Widget',
                );
                parent::__construct('Elitica_Latest_Articles_2', 'Elitica Latest Articles 2', $widget_ops);
            }

            function form($instance)
            {

                $defaults = array(
                    'number' => '-1'
                );
                $depth = $instance['number'];

                // markup for form 
                ?>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>">please enter the number of posts you want to list</label>
            <input class="widefat" type="number" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo esc_attr($depth); ?>">
        </p>

        <?php
            }

            public function widget($args, $instance)
            {
                extract($args);

                $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);

                if (empty($instance['number']) || !$number = absint($instance['number']))
                    $number = 10;

                $r = new WP_Query(apply_filters('widget_posts_args', array('posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true)));
                if ($r->have_posts()) :
                    ?>
           

               <div class="New-post-list-2">
                <div class="New-post-list-2-title">
                    <h1><?php echo $title; ?></h1>
                </div>
                <div class="New-post-list-2-content">
                    <?php
                                echo $before_widget;
                                ?>
                    <ul>
                        <?php while ($r->have_posts()) : $r->the_post(); ?>
                     
                            <a href="<?php the_permalink()?>">
                <div class="New-post-list-2-post">
                        <i class="fas fa-chevron-right fa-2x"></i>
                    <div class="New-post-list-2-img">
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                    </div>
                    <div class="New-post-list-2-post-title">
                      <p><?php the_title() ?></p>
                    </div>
                    <div class="New-post-list-2-date">
                        <p>Cts 2, 2019 8:01</p>
                    </div>
                </div>
            </a>
                        <?php endwhile; ?>
                    </ul>


                </div>
            </div>
        <?php
                    echo $after_widget;

                    wp_reset_postdata();

                endif;
            }
        }
        add_action('widgets_init', function () {
            unregister_widget('WP_Widget_Recent_Posts');
            register_widget('Elitica_Latest_Articles_2_Widget');
        });







        //Custom Elitica Article Post//

        class Elitica_Article_Post_Widget extends WP_Widget
        {

            public function __construct()
            {
                $widget_ops = array(
                    'classname' => 'elitica_article_post_widget',
                    'description' => 'Custom Elitica Article Post ',
                );
                parent::__construct('elitica_article_post_widget', 'Elitica Article Post ', $widget_ops);
            }

            function form($instance)
            {


                $depth = $instance['title'];

                // markup for form 
                ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">please enter the number of posts you want to list</label>
            <textarea style="height:50px;" class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($depth); ?> ">  </textarea>

        </p>

    <?php
        }

        public function widget($args, $instance)
        {
            extract($args);

            $title = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title'], $instance, $this->id_base);

            ?>

        <div class="Post-article">
            <div class="Post-article-title">
                <?php echo get_avatar(get_the_author_meta('ID')); ?>
                <p><?php the_author_link(); ?></p>
            </div>
            <div class="Post-article-text">
                <p><?php echo $title ?></p>
            </div>
        </div>
    <?php
        }
    }
    add_action('widgets_init', function () {
        unregister_widget('WP_Widget_Recent_Posts');
        register_widget('Elitica_Article_Post_Widget');
    });








    class Elitica_Ads_Widget extends WP_Widget
    {

        public function __construct()
        {
            $widget_ops = array(
                'classname' => 'elitica_ads-widget',
                'description' => 'Custom Elitica Article Post ',
            );
            parent::__construct('elitica_ads-widget', 'Elitica Ads Widget ', $widget_ops);
        }

        function form($instance)
        {


            $depth = $instance['title'];

            // markup for form 
            ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">please enter the number of posts you want to list</label>
            <textarea style="height:50px;" class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($depth); ?> ">  </textarea>

        </p>

    <?php
        }

        public function widget($args, $instance)
        {
            extract($args);

            $title = $instance['title'];
            echo $title;

            ?>


    <?php
        }
    }
    add_action('widgets_init', function () {
        unregister_widget('WP_Widget_Recent_Posts');
        register_widget('Elitica_Ads_Widget');
    });








    class Elitica_Post_optional_1 extends WP_Widget
    {

        public function __construct()
        {
            $widget_ops = array(
                'classname' => 'elitica_post_optional_1',
                'description' => 'Custom Elitica Article Post ',
            );
            parent::__construct('elitica_post_optional_1', 'Elitica Optional 1 ', $widget_ops);
        }

        function form($instance)
        {


            $title = $instance['title'];
            $text = $instance['text'];

            // markup for form 
            ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">please enter the title</label>
            <textarea style="height:50px;" class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?> ">  </textarea>
            <label for="<?php echo $this->get_field_id('title'); ?>">please enter the text</label>
            <textarea style="height:50px;" class="widefat" type="text" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" value="<?php echo esc_attr($text); ?> ">  </textarea>

        </p>

    <?php
        }

        public function widget($args, $instance)
        {
            extract($args);

            $title = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title'], $instance, $this->id_base);
            $text = apply_filters('widget_title', empty($instance['text']) ? __('') : $instance['text'], $instance, $this->id_base);


            ?>
        <div class="Post-optional-1">
            <div class="Post-optional-1-title">
                <p><?php echo $title ?></p>

            </div>
            <div class="Post-optional-1-text">
                <p><?php echo $text ?></p>
            </div>
            <img src="/img/icon/post-optional-1-icon.png" alt="">
        </div>


<?php
    }
}
add_action('widgets_init', function () {
    unregister_widget('WP_Widget_Recent_Posts');
    register_widget('Elitica_Post_Optional_1');
});



/// User widget



class Elitica_Avatar_Widget extends WP_Widget
{

    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'Elitica_Avatar_Widget',
            'description' => 'Elitica Avatar Widget',
        );
        parent::__construct('Elitica_Avatar_Widget', 'Elitica Avatar Widget ', $widget_ops);
    }

    

    public function widget($args, $instance)
    {
       

        ?>
    <a href="author/<?php the_author_nickname() ?>">
    <div class="Avatar-widget">
        <div class="Avatar-widget-photo">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('elitca-author-area-avatar-image')); ?>" alt="">
        </div>
        <div class="Avatar-widget-full-name">
            <p><?php echo get_theme_mod('elitca-author-area-headline'); ?></p>
        </div>
        <div class="Avatar-widget-description">
            <p><?php echo get_theme_mod('elitca-author-area-text'); ?></p>
        </div>
        <div class="Avatar-widget-social-links">
                <?php if (esc_attr(get_option('twitter_url'))) : ?>
            <!--twitter-->
            <a href="<?php echo esc_attr( get_option( 'twitter_url' ) );?>">
                <i class="fab fa-twitter"></i>

            </a>
            <?php endif; ?>
            <?php if (esc_attr(get_option('facebook_url'))) : ?>

            <!--facebook-->
            <a href="<?php echo esc_attr( get_option( 'facebook_url' ) );?>">
                <i class="fab fa-facebook-f "></i>

            </a>
            <?php endif; ?>
            <?php if (esc_attr(get_option('Instagram_url'))) : ?>

            <!--instagram-->
            <a href="<?php echo esc_attr( get_option( 'Instagram_url' ) );?>">
                <i class="fab fa-instagram "></i>


            </a>
            <?php endif; ?>

        </div>
    </div>
    </a>

<?php
}
}
add_action('widgets_init', function () {
unregister_widget('WP_Widget_Recent_Posts');
register_widget('Elitica_Avatar_Widget');
});
