<?php get_header(); ?>
	
<div class="container">

    <div class="main-content"> 

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
            <div class="post" id="post-<?php the_ID(); ?>">

                <!-- <h1><?php the_title(); ?></h1> -->

                <div class="entry">

                    <?php the_content(); ?>

                    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                </div>

                <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

            </div>

        <?php endwhile; endif; ?>


        <div class="clearfix"></div>



        <?php $the_query = new WP_Query( 'post_type=event&posts_per_page=6' ); ?>

        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <div class="article">

        <!--     <p class="date"><?php the_time('l, F jS, Y') ?></p> -->

            <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');

            $attachments = get_posts(array(
                'post_type' => 'attachment',
                'numberposts' => -1,
                'post_status' => null,
                'post_parent' => get_the_ID(),
                'order' => 'ASC',
                'orderby' => 'id',

            ));

            } else { ?>
            <img src="<?php bloginfo('template_directory'); ?>/images/bblogo.jpg"
            alt="<?php the_title(); ?>" />
            <?php } ?>

            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

            <p><?php the_excerpt(__('(more...)')); ?></p>

        </div>


        <?php 
        endwhile;
        wp_reset_postdata();
        ?>

    </div>

    <?php get_sidebar(); ?>


<div class="clearfix"></div>

    <div class="graphics container">

        <div><span class="icon"></span> 20 <small>Shows</small></div>
        <div><span class="icon"></span>4 <small>Venues</small></div>
        <div><span class="icon"></span> 24 <small>Performers</small> </div>
        <div><span class="icon"></span> 10 <small>Blocks</small></div>
        
    </div>

</div>

<div class="gray">

    <div class="container">

        <div class="left">


            <img src="<?php bloginfo('template_directory');?>/images/collage1.png">
            <img src="<?php bloginfo('template_directory');?>/images/collage2.png">

        </div>

        <div class="right">

            <img src="<?php bloginfo('template_directory');?>/images/murderfist.jpg">

            <h5><a href="#">#CINDERBLOCK</a></h5>

        </div>

        <div class="social color">

            <ul>
                <li><a href="#" class="facebook">Facebook</a></li>
                <li><a href="#" class="twitter">Twitter</a></li>
                <li><a href="#" class="tumblr">Tumblr</a></li>
                <li><a href="#" class="youtube">YouTube</a></li>

            </ul>

        </div>

    </div>

</div>    

<div class="container">

    <div class="sponsors">

        <img src="<?php bloginfo('template_directory');?>/images/lyft.png">
        <img src="<?php bloginfo('template_directory');?>/images/pbr.png">
        <img src="<?php bloginfo('template_directory');?>/images/redbull.png">
        <img src="<?php bloginfo('template_directory');?>/images/vimeo.png">

    </div>


</div>


<?php get_footer(); ?>
