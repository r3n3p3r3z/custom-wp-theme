<?php
/**
 * The template for displaying all pages.
 *
 * @package Causes
 */
  get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
 		<div id="content" class="content">
			<div class="section-page-title">
				<div class="container">
					<div class="gutter">
				        <h5><?php the_title(); ?></h5>
					</div>
				</div>
			</div>
			<div class="section-inner-page">
				<div class="container">
					<div class="column-container">
						<div class="column-8-12 left">
							<div class="gutter">
								<div class="page-container">
									<article class="article-single">
										<?php the_content(); ?>
									</article>
									<p><?php posts_nav_link(); ?></p>
									<div class="padinate-page"><?php wp_link_pages(); ?></div> 	 									
									<?php comments_template(); ?>
								</div>
							</div>
						</div>
						<div class="column-4-12 right">
							<div class="gutter">
								<?php  get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endwhile; ?>
<?php get_footer(); ?>