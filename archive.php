<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>
					
				
			<div class="container post-container">	

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<p class="date">Archive for <?php the_time('F jS, Y'); ?></p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<p class="date">Archive for <?php the_time('F, Y'); ?></p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>
			
			<?php } ?>
			

			<?php while (have_posts()) : the_post(); ?>
			
			
			
				<div <?php post_class() ?>>
				
						<div class="container white">
				

						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
						<strong><?php the_time('l, F jS, Y') ?></strong>

						
						<?php the_post_thumbnail('large'); ?>
						

<!-- 						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?> -->

						<div class="entry">
							<?php the_content(); ?>
						</div>
						
						<div class="clearfix"></div>
						
						<?php edit_post_link('Edit this entry','','.'); ?>


				</div>	<div class="clearfix"></div>

			
				</div><!--end white container-->


			<?php endwhile; ?>
			
			<div class="container">


			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>
	
			</div>
			
			</div><!--end post container-->
	

<?php get_footer(); ?>
