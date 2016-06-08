<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			
			</div>

			<h1><?php the_category(' '); ?> </h1>
			
			<div class="container white">



					<div class="main-content">

				

					<h1>	 <?php the_title(); ?></h1>

					<?php
					
					$themeta = get_post_meta($post->ID, $key, TRUE);
					if($themeta != '') {
					echo '<h6>';
					echo get_post_meta( get_the_ID(), 'title', true ); 
					echo '</h6>';
					}
					?>
								
					<div class="entry">
						
						<?php the_post_thumbnail('large'); ?>
						
						<?php the_content(); ?>
						
						<div class="clearfix"></div>
						

						
						<?php
						
						$key = 'video';
						$themeta = get_post_meta($post->ID, $key, TRUE);
						if($themeta != '') {
						echo '<div class="video-container">';
						echo get_post_meta( get_the_ID(), 'video', true ); 
						echo '</div>';
						}
						?>
						
						<?php											
						
						$key = 'twitter';
						$themeta = get_post_meta($post->ID, $key, TRUE);
						if($themeta != '') {
						echo '<a class="button twitter" href="https://twitter.com/';
						echo get_post_meta( get_the_ID(), 'twitter', true ); 
						echo '" target="_blank"></a>';

						}
						?>
						<div style="float:left; margin-right:10px;">

						<?php											
						
						$key = 'website';
						$themeta = get_post_meta($post->ID, $key, TRUE);
						if($themeta != '') {
						echo '<a class="button" href="';
						echo get_post_meta( get_the_ID(), 'website', true ); 
						echo '" target="_blank">';
						echo 'website';
						echo '</a>';
						

						}
						?>
						</div>


						
						
						<div class="clearfix"></div>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

					</div>

					<div class="prevlink"><?php previous_post('% &raquo; ', '', 'yes'); ?></div>
					<div class="nextlink"><?php next_post(' &laquo; % ', '', 'yes'); ?></div>

					<div class="clearfix"></div>
					
					<?php edit_post_link('Edit this entry','','.'); ?>





					
				</div>

				 <?php get_sidebar(); ?>



			</div>



	<?php endwhile; endif; ?>
	

<?php get_footer(); ?>