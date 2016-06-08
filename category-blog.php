<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>
					
				
			<div class="container post-container">	

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h3>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>

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
			

			<div class="left-of-sidebar">

			<?php while (have_posts()) : the_post(); ?>
			
				
				<div <?php post_class() ?>>
				
					<div class="container white">

						<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
<!-- 						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?> -->
						
						<p class="date"><?php the_time('l, F jS, Y') ?></p>

<!-- 						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?> -->

						<div class="entry">
							<?php the_excerpt(); ?>
						</div>
						
						<?php edit_post_link('Edit this entry','','.'); ?>


				</div>
				
			
				</div><!--end white container-->

			

			<?php endwhile; ?>
			
				</div><!--end left of sidebar-->
				
				<?php get_sidebar(); ?>

				
				<div class="clearfix"></div>
			
			<div class="container">
			



			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>
	
			</div>
	
	</div>
			

<?php get_footer(); ?>
