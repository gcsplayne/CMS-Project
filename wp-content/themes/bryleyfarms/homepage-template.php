<?php 
    /**
     * Template Name: Homepage Layout
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
   
   <section class="text-center mt-5">
         <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'updates',
                'posts_per_page' => 2,
            );
            $arr_posts = new WP_QUERY($args);
            if ($arr_posts->have_posts()) : 
                while($arr_posts->have_posts()) :
                    $arr_posts->the_post();
         ?>
         <article class="mb-5 border border-light" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                        if(has_post_thumbnail()) :
                            the_post_thumbnail();
                        endif;
                    ?>
                    <header>
                        <h3 class="mt-3">
                            <?php the_title(); ?>
                        </h3>
                    </header>
                    <div>
                        <?php the_excerpt(); ?>
                    </div>
                    <a class="btn btn-dark" href="<?php the_permalink(); ?>">Read More</a>

        </article>
        
        <?php 
             endwhile;
            endif;
        ?>
</section>
</main>

<?php 
    get_footer();
?>