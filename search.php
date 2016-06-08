<?php get_header(); ?>

	<div class="container">


	<?php if (have_posts()) : ?>

		<h1>Search Results</h1>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<div class="container white">


				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<strong><?php the_time('l, F jS, Y') ?></strong>
				
				<?php the_post_thumbnail('thumbnail'); ?>


				<div class="entry">

					<?php the_excerpt(); ?>

				</div>
				
				<div class="clearfix"></div>

			</div>
			
				</div>


		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>
	
		<div class="container white">

		<h1>No posts found.</h1>

		</div>
		
	<?php endif; ?>
	
	</div><!--end container-->

<?php get_footer(); ?>
