<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>
					
				

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>
			
			<?php } ?>
			

			<div class="container">


			<?php while (have_posts()) : the_post(); ?>
						 
				<div <?php post_class() ?>>
											
					<div class="member">
						
						<h5 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>

							<?php
							
							$key = 'title';
							$themeta = get_post_meta($post->ID, $key, TRUE);
							if($themeta != '') {
							echo '<h6>';
							echo get_post_meta( get_the_ID(), 'title', true ); 
							echo '</h6>';
							}
							?>

							<span><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('square'); ?></a></span>
						
							<div class="entry">
								
								<div class="clearfix"></div>																							
													
							</div><!--end entry-->
						
						<?php edit_post_link('Edit this entry','','.'); ?>


						</div><!--end post wrap-->
						
						
						
				</div><!--end container-->


					<?php endwhile; ?>
				
					<div class="clearfix"></div>
					

				<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		</div><!--end container-->
		


			
	<?php else : ?>
	
		<div class="container white">

		<h2>Nothing found</h2>
		
		</div>

	<?php endif; ?>
	
	
			

<?php get_footer(); ?>