<?php get_header();?>
<div class="container">
    <?php 
        $args = array(
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<h1 class="text-center mb-4">' . get_the_title() . '</h1>';
                echo the_content();
                echo '<br/>';
            }
            wp_reset_postdata();
        }
    ?>
</div>
<?php get_footer();?>
