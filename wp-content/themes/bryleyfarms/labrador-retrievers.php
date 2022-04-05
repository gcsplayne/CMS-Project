<?php 
    /**
     * Template Name: Labrador Retrievers Layout
     * Template Post Type: page
     */
    get_header();
?>
<main>
<!-- Display content normal way -->
    <?php 
         while(have_posts()) : the_post();
         the_content();
         endwhile;
         wp_reset_query();
    ?>
    <!-- display content using ACF -->

</main>

<?php 
    get_footer();
?>