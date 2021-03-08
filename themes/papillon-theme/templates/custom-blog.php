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
<!-- MAKE UNQUE -->
<main id="site-blog-post" role="main">
	
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			$args = array(
				'posts_per_page' => 6, 
				'offset' => 3,
				'post_type' => 'post',
				'post_status' => 'publish',
			);
		
			$query = new WP_Query( $args );
            
			if ( $query->have_posts() ) {
		
				while ( $query->have_posts() ) {
					$query->the_post();
					
					$post_title = get_the_title();
					$post_content = get_the_excerpt();
					$post_thumbnail = get_the_post_thumbnail_url();
					$post_link = get_the_permalink();
		
					?>

                    <div class="entry-content additional-post">
                        <hr class="divider">
                        <h2><a href="<?php echo $post_link; ?>"><?php echo $post_title;?></a></h2>
                        <img class="wp-post-image" src="<?php echo $post_thumbnail; ?>" alt="Featured Post Image"  >
                        <p><?php echo $post_content;?></p>
                        <p><a href="<?php echo $post_title?>"> Read More</a></p>
                    </div> 
					
					<?php
				}
			}
			wp_reset_postdata();
		}
	}

?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>

