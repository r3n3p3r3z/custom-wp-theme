<?php 
/**
 * 
 * @package Causes 
 */
?>
<div id="content" class="content">
	<?php if(get_theme_mod('pwt_title_1', __( 'Welcome To Causes Theme', "causes")) or get_theme_mod('pwt_title_2', __( 'Welcome To Causes Theme', "causes"))) { ?>
	<div class="section-causes">
		<div class="container">
			<div class="gutter">
               <div class="owl-carousel causes-carousel">
					<div class="item">
						<div class="column-container">
							<div class="column-<?php if(get_theme_mod('pwt_slider_image_upload1')) { ?>5<?php } else { ?>12<?php }?>-12 right">
								<div class="slide-box">
									<?php if(get_theme_mod('pwt_title_1',__( 'Welcome To Causes Theme', "causes"))) { ?><p class="slide-title"><?php echo esc_html(get_theme_mod('pwt_title_1',__( 'Welcome To Causes Theme', "causes"))); ?></p><?php } ?>
									<div class="inner">
										<?php if(get_theme_mod('pwt_title_content1',__( 'Help 100 children', "causes"))) { ?><h6><a href="<?php echo esc_url(get_theme_mod('pwt_button_color_link1')); ?>"><?php echo esc_html(get_theme_mod('pwt_title_content1',__( 'Help 100 children', "causes"))); ?></a></h6><?php } ?>
										<?php if(get_theme_mod('pwt_slider_description1')) { ?><p><?php echo esc_html(get_theme_mod('pwt_slider_description1')); ?></p><?php } ?>
										<?php if(get_theme_mod('pwt_button_color_text1')) { ?><a href="<?php echo esc_url(get_theme_mod('pwt_button_color_link1')); ?>" class="button-styled"><?php echo esc_html(get_theme_mod('pwt_button_color_text1')); ?></a><?php } ?>						
									</div>
								</div>
							</div>
							<?php if(get_theme_mod('pwt_slider_image_upload1')) { ?>
                            <div class="column-7-12 left">
								<div class="slide-image">
									<img src="<?php echo esc_url(get_theme_mod('pwt_slider_image_upload1')); ?>"/>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>			
					<div class="item">
						<div class="column-container">
							<div class="column-<?php if(get_theme_mod('pwt_slider_image_upload2')) { ?>5<?php } else { ?>12<?php }?>-12 right">
								<div class="slide-box">
									<?php if(get_theme_mod('pwt_title_2',__( 'Welcome To Causes Theme', "causes"))) { ?><p class="slide-title"><?php echo esc_html(get_theme_mod('pwt_title_2', __( 'Welcome To Causes Theme', "causes"))); ?></p><?php } ?>
									<div class="inner">
										<?php if(get_theme_mod('pwt_title_content2',__( 'Help 100 children', "causes"))) { ?><h6><a href="<?php echo esc_url(get_theme_mod('pwt_button_color_link2')); ?>"><?php echo esc_html(get_theme_mod('pwt_title_content2',__( 'Help 100 children', "causes"))); ?></a></h6><?php } ?>
										<?php if(get_theme_mod('pwt_slider_description2')) { ?><p><?php echo esc_html(get_theme_mod('pwt_slider_description2')); ?></p><?php } ?>
										<?php if(get_theme_mod('pwt_button_color_text2')) { ?><a href="<?php echo esc_url(get_theme_mod('pwt_button_color_link2')); ?>" class="button-styled"><?php echo esc_html(get_theme_mod('pwt_button_color_text2')); ?></a><?php } ?>						
									</div>
								</div>
							</div>
							<?php if(get_theme_mod('pwt_slider_image_upload2')) { ?>
                            <div class="column-7-12 left">
								<div class="slide-image">
									<img src="<?php echo esc_url(get_theme_mod('pwt_slider_image_upload2')); ?>"/>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<?php } ?>	
	<div class="section-cause-list">
		<div class="container">
		    <?php if(get_theme_mod('pwt_box_title',__( 'Latest Sermon', "causes"))) { ?>
			<div class="gutter">
				<h4><?php echo esc_html(get_theme_mod('pwt_box_title',__( 'Latest Sermon', "causes"))); ?> <span><?php echo esc_html(get_theme_mod('pwt_box_subtitle',__( 'The open invitation', "causes"))); ?></span></h4>
			</div>
			<?php } ?>	
			<div class="column-container">
				<div class="column-4-12">
					<div class="gutter">
						<article class="article-cause">
							<?php if(get_theme_mod('pwt_cause_icons1')) { ?><a class="icon-disc" href="<?php echo esc_url(get_theme_mod('pwt_cause_link1')); ?>"><img src="<?php echo esc_url(get_theme_mod('pwt_cause_icons1')); ?>" alt="heart" /></a><?php } ?>
							<h2><a href="<?php echo esc_url(get_theme_mod('pwt_cause_link1',__( 'Drought and Hunger', "causes"))); ?>"><?php echo esc_html(get_theme_mod('pwt_title_color1',__( 'Drought and Hunger', "causes"))); ?></a></h2>
							<p><?php echo esc_html(get_theme_mod('pwt_cause_description1')); ?></p>
							<?php if(get_theme_mod('pwt_button_text1',__( 'Read More', "causes"))) { ?><a class="button" href="<?php echo esc_url(get_theme_mod('pwt_cause_link1')); ?>"><?php echo esc_html(get_theme_mod('pwt_button_text1',__( 'Read More', "causes"))); ?></a><?php } ?>
						</article>
					</div>
				</div>	
				<div class="column-4-12">
					<div class="gutter">
						<article class="article-cause">
							<?php if(get_theme_mod('pwt_cause_icons2')) { ?><a class="icon-disc" href="<?php echo esc_url(get_theme_mod('pwt_cause_link2')); ?>"><img src="<?php echo esc_url(get_theme_mod('pwt_cause_icons2')); ?>" alt="heart" /></a><?php } ?>
							<h2><a href="<?php echo esc_url(get_theme_mod('pwt_cause_link2',__( 'Drought and Hunger', "causes"))); ?>"><?php echo esc_html(get_theme_mod('pwt_title_color2',__( 'Drought and Hunger', "causes"))); ?></a></h2>
							<p><?php echo esc_html(get_theme_mod('pwt_cause_description2')); ?></p>
							<?php if(get_theme_mod('pwt_button_text2',__( 'Read More', "causes"))) { ?><a class="button" href="<?php echo esc_url(get_theme_mod('pwt_cause_link2')); ?>"><?php echo esc_html(get_theme_mod('pwt_button_text2',__( 'Read More', "causes"))); ?></a><?php } ?>
						</article>
					</div>
				</div>	
				<div class="column-4-12">
					<div class="gutter">
						<article class="article-cause">
							<?php if(get_theme_mod('pwt_cause_icons3')) { ?><a class="icon-disc" href="<?php echo esc_url(get_theme_mod('pwt_cause_link3')); ?>"><img src="<?php echo esc_url(get_theme_mod('pwt_cause_icons3')); ?>" alt="heart" /></a><?php } ?>
							<h2><a href="<?php echo esc_url(get_theme_mod('pwt_cause_link3',__( 'Drought and Hunger', "causes"))); ?>"><?php echo esc_html(get_theme_mod('pwt_title_color3',__( 'Drought and Hunger', "causes"))); ?></a></h2>
							<p><?php echo esc_html(get_theme_mod('pwt_cause_description3')); ?></p>
							<?php if(get_theme_mod('pwt_button_text3',__( 'Read More', "causes"))) { ?><a class="button" href="<?php echo esc_url(get_theme_mod('pwt_cause_link3')); ?>"><?php echo esc_html(get_theme_mod('pwt_button_text3',__( 'Read More', "causes"))); ?></a><?php } ?>
						</article>
					</div>
				</div>					
			</div>			
		</div>
	</div>
	<div class="section-inner-page">
		<div class="container">
			<div class="column-container">
				<div class="column-12-12 left">
					<div class="gutter">
						<div class="page-container">
							<article class="article-single">
								<?php the_content(); ?>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<?php if(get_theme_mod('pwt_center_box_title',__( 'Latest Sermon', "causes")) or get_theme_mod('pwt_center_box_subtitle',__( 'The open invitation', "causes")) or get_theme_mod('pwt_center_box_button_text',__( 'Download Sermon', "causes"))) { ?>
	<div class="section-download">
		<div class="container">
			<div class="column-container">
				<div class="column-6-12">
					<div class="gutter">
						<h5><?php echo esc_html(get_theme_mod('pwt_center_box_title',__( 'Latest Sermon', "causes"))); ?></h5>
						<p><?php echo esc_html(get_theme_mod('pwt_center_box_subtitle',__( 'The open invitation', "causes"))); ?></p>
					</div>
				</div>
				<?php if(get_theme_mod('pwt_center_box_button_text',__( 'Download Sermon', "causes"))) { ?>
				<div class="column-6-12">
					<div class="gutter">
						<p class="text-right"><a class="buttom-download" href="<?php echo esc_url(get_theme_mod('pwt_center_box_button_link')); ?>"><?php echo esc_html(get_theme_mod('pwt_center_box_button_text',__( 'Download Sermon', "causes"))); ?></a></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
</div>