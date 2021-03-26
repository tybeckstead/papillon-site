<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Papillon_Store_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (is_front_page() ) {
		?>
		<div class="grid-x">
			<div class="cell large-6 medium-6 small-12">
				<?php if( has_post_thumbnail() ) { ?>
					<div class="post-thumbnail main_thumb">
						<img class="thumbnail_post_image" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>">
					</div>
				<?php } ?>
			</div>
			<div class="cell large-6 medium-6 small-12">
				<div class="center_align">
					<h2 class="home_text">Dress in Style with Papillon</h2>
					<h5 class="home_other_text">Check out our latest fashion collection</h5>
					<p class="link"><a href="<?php echo esc_url( content_url( '/shop' ) ); ?>">SHOP WOMEN’S LATEST ARRIVALS</a></p>
				</div>
			</div>
			<div class="cell large-12 small-12">
				<div class="grid-x grid-margin-x">
					<div class="large-8 large-offset-2 ">
						<ul class="flex_links">
							<li class="item_home"><a href="<?php echo esc_url( content_url( '/shop' ) ); ?>">Women</a></li>
							<li class="item_home"><a href="<?php echo esc_url( content_url( '/shop' ) ); ?>">Men</a></li>
							<li class="item_home"><a href="<?php echo esc_url( content_url( '/shop' ) ); ?>">Kids</a></li>
							<li class="item_home"><a href="<?php echo esc_url( content_url( '/shop' ) ); ?>">Sale</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
	}else {?> 
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if( has_post_thumbnail() ) { ?>
				<div class="post-thumbnail main_thumb">
					<img class="thumbnail_post_image" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>">
				</div>
			<?php } ?>
		</header><!-- .entry-header -->
	<?php }?>
	

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pappilon-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'pappilon-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
