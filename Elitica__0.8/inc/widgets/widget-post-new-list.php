<div class="Post-new-list">
    <div class="Post-new-list-title">
        <p>LATEST NEWS</p>
    </div>
    <div class="Post-new-list-span">
        
        
        
        
        
        <?php   
        $number = 0 ;
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                $number++;
            
             
                
                if (wp_count_posts()->publish > 1 ) :
                    get_template_part('inc/widgets/widget-post', 'new');
                  
                    else :

                  endif;
    
        endwhile;
        
        endif;
        
        
        
                ?>
    </div>
</div>