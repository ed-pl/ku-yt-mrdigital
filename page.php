<?php

        // hearer.php einbinden
        get_header();

        // Bild einbinden
        the_post_thumbnail('banner-image');
        ?>
        <h2><?php the_title();?></h2>
        <h2><?php the_title();?></h2>

        <?php
        // The Loop
        while(have_posts()) {
            the_post(); ?>
            <h1>This is a page not a post</h1>
            
            <?php the_content();?>
        
        <?php }

        // footer.php einbinden
        get_footer();

?>

        