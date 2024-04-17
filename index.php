
    
    
    <?php

    get_header();

        
        // The Loop
        while(have_posts()) {
            the_post(); ?>
<div class="container">
            <h5 class="font-weight-bold"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
            <?php the_content();?>
            <hr>
</div>
        <?php }

            


        ?>
    <?php get_footer(); ?>
