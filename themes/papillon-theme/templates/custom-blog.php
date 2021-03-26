<?php
/**
 * The template for displaying single posts and pages.
 * Template Name: Front Page Template
 * Template Post Type: post, page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package WordPress
 * @subpackage Papillon_Store_Theme
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<!-- Custom Main Blog Posts -->
<main id="post" role="main">
	
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

            ?>

            <main class="site_blog_content">
                <?php
                    // WP_Query Custom Post Type
                    // Array Takes in 6 blogs per page and show most recent post
                    $args = array(
                        'posts_per_page' => 6, 
                        'offset' => 1,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                    );
                
                    $query = new WP_Query( $args );
                    
                    if ( $query->have_posts() ) {
                
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            // Variables creating for title, excerpt, image, and link to post
                            $post_title = get_the_title();
                            $post_content = get_the_excerpt();
                            $post_thumbnail = get_the_post_thumbnail_url();
                            $post_link = get_the_permalink();
                
                            ?>

                            <!-- Content Outputted to page -->
                            <div class="blog-content">
                                <hr class="divider">
                                <h2 class="blog_post_title"><a href="<?php echo $post_link; ?>"><?php echo $post_title;?></a></h2>
                                <img class="wp_blog_img" src="<?php echo $post_thumbnail; ?>" alt="Featured Post Image"  >
                                <p class="blog_paragraph"><?php echo $post_content;?></p>
                                <p class="read_more"><a href="<?php echo $post_title?>"> Read More</a></p>
                            </div> 
                            
                            <?php
                        }
                    }
                ?>
            </main>
            <?php
			wp_reset_postdata();
		}
	}

?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>

