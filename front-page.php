<?php 
/**
 * 
 * @package Causes 
 */
get_header(); 
if ( have_posts() ) : 
if ( 'posts' == get_option( 'show_on_front')) {
?>
<div id="content" class="content">
	<div class="section-page-title">
		<div class="container">
			<div class="gutter">
				<h5><?php echo esc_html(get_theme_mod('pwt_blog_page',__( 'Latest Blog Posts', "causes"))); ?></h5>
			</div>
		</div>
	</div> 
	<?php get_template_part( 'content', 'posts' ); ?>
</div>
<?php } else { ?>		
        <?php get_template_part( 'content', 'home' ); ?>
<?php } 
endif; 
get_footer(); ?>