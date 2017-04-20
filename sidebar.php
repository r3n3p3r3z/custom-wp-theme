<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Causes
 */
?>
<div class="sidebar-container">
	<?php if ( is_active_sidebar('blog-sidebar') ) : ?>
		<?php dynamic_sidebar('blog-sidebar'); ?>
	<?php else : ?>	
		<aside class="widget">
			<h3 class="widget-title"><?php _e( 'Recent Posts', "causes" ); ?></h3>
			<ul><?php wp_get_archives('type=postbypost&limit=10'); ?></ul>
		</aside>
		<aside class="widget">
			<h3 class="widget-title"><?php _e( 'Pages', "causes" ); ?></h3>
			<ul><?php wp_list_pages('title_li='); ?></ul>
		</aside>
		<aside class="widget">
			<h3 class="widget-title"><?php _e( 'Tag Cloud', "causes" ); ?></h3>
			<div class="tagcloud"><?php wp_tag_cloud(); ?></div>
		</aside>
		<aside class="widget">
			<h3 class="widget-title"><?php _e( 'Categories', "causes" ); ?></h3>
			<ul><?php wp_list_categories('title_li='); ?></ul>
		</aside>		
	<?php endif; ?>
</div>