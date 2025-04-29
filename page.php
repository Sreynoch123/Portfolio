<?php get_header(); ?>
<div class="container py-5">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        <?php endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</div>
<?php get_footer(); ?>

   