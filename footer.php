<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Causes
 */
?>
		<footer id="footer" class="footer">
			<div class="widgets-block">
				<div class="container">
					<div class="column-container">
						<div class="column-3-12">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-1') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-1'); ?>
								<?php else : ?>
									<aside class="widget">
										<h3 class="widget-title"><?php _e( 'Recent Posts', "causes" ); ?></h3>
										<ul>
											<?php wp_get_archives('type=postbypost&limit=10'); ?>
										</ul>
									</aside>
								<?php endif; ?>
							</div>
						</div>
						<div class="column-3-12">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-2') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-2'); ?>
								<?php else : ?>
									<aside class="widget">
										<h3 class="widget-title"><?php _e( 'Tag Cloud', "causes" ); ?></h3>
										<div class="tagcloud">
											<?php wp_tag_cloud(); ?>
										</div>
									</aside>
								<?php endif; ?>
							</div>
						</div>
						<div class="column-3-12">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-3') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-3'); ?>
								<?php else : ?>
									<aside class="widget">
										<h3 class="widget-title"><?php _e( 'Pages', "causes" ); ?></h3>
										<ul>
											<?php wp_list_pages('title_li='); ?>
										</ul>
									</aside>
								<?php endif; ?>
							</div>
						</div>
						<div class="column-3-12">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-4') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-4'); ?>
								<?php else : ?>
									<aside class="widget">
										<h3 class="widget-title"><?php _e( 'Categories', "causes" ); ?></h3>
										<ul>
											<?php wp_list_categories('title_li='); ?>
										</ul>
									</aside>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-block">
				<div class="container">
					<div class="column-container">
						<div class="column-5-12">
							<div class="gutter">
								<p class="text-left"><?php echo sprintf( __('Copyright &copy; 2015 %s All Rights Reserved.', 'causes'), get_bloginfo('name') );?></p>
							</div>
						</div>
						<div class="column-7-12">
							<div class="gutter">
								 <p class="text-right"><?php do_action( 'causes_display_credits' ); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>
