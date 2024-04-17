
<?php

    //header.php einbnden
    get_header();

        // The Loop
        while(have_posts()) {
            the_post(); ?>
            <div class="container mt-2 pb-5 border-5 border-info text-center">
            <h5 class="font-weight-bold pt-3 pb-3 border border-info mt-3 mb-3"><?php the_title();?></h5>
                <h5 font-weight-bold><?php the_content();?></h5>
            </div>
        <?php }

    //footer.php einbinden
    get_footer();

    ?>