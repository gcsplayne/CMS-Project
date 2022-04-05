<?php 
    /**
     * Template Name: Updates Layout
     * Template Post Type: page
     */
    get_header();
?>
<main class= "d-flex justify-content-center" >
<!-- Display content normal way -->
    <?php 
         while(have_posts()) : the_post();
         the_content();
         endwhile;
         wp_reset_query();
    ?>
    <!-- display post by category -->

</main>

<?php 
    get_footer();
?>