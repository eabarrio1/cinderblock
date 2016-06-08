<?php get_header(); ?>

	<div class="container team white">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">

				<h1><?php the_title(); ?></h1>

				<div class="entry">

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				</div>

				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	
		<?php endwhile; endif; ?>

	</div>

	</div><!--end container-->

<?php get_footer(); ?>
