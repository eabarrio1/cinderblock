<?php get_header(); ?>

	
    <div class="pinky"><div class="container"> 

    <!-- <h2>Coming Thursday, September 15<sup>th</sup> through Sunday, September 18<sup>th</sup>, 2016</h2>  -->

    <h6><?php echo do_shortcode('[rotatingtweets screen_name=CinderBlockFest]');?></h6>

    </div></div>

    <div id="vid-bg">

         <div class="container">

             <a class="logo" a href="<?php bloginfo('url'); ?>">"Cinder Block Comedy Festival</a>


             <h4 style="margin: 0 0 50px 0; text-align: center; color: white;">Coming to Williamsburg, Brooklyn September 15 - September 18, 2016 </h4>

        </div>

        <div class="container nopadding"><h1>Submissions are now closed!</h1>

              <h2 style="margin-top: 10px;">Performers will be notified of their admission by June 15.</h2>

        </div>

       <!-- <div class="container">

           <a class="pink third" href="<?php bloginfo('url'); ?>/submit/individual-submissions/">Individual</a>
           <a class="pink third" href="<?php bloginfo('url'); ?>/submit/group-show-submissions/">Group/Show</a>
           <a class="pink third" href="<?php bloginfo('url'); ?>/submit/sketch/">Sketch</a>

        </div>end container-->

    </div>

    </div>

  <div class="gray">

  <div class="container">

  <h1 class="big"><span>Hello!</span></h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
        <div class="post" id="post-<?php the_ID(); ?>">

          <div class="entry">


            <?php the_content(); ?>


          </div>

          <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

        </div>

      <?php endwhile; endif; ?>
  </div>


  </div>

<div class="container">

    <h1>Cinder Block Team</h1>

    <?php $the_query = new WP_Query( 'category_name=team&posts_per_page=33' ); ?>

    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

    <div class="member">

    <a href="<?php the_permalink() ?>"><h5><?php the_title(); ?></h5></a>

      <?php
              
      $key = 'title';
      $themeta = get_post_meta($post->ID, $key, TRUE);
      if($themeta != '') {
      echo '<h6>';
      echo get_post_meta( get_the_ID(), 'title', true ); 
      echo '</h6>';
      }
      ?>
    

    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('square'); ?></a>

    </div>

    <?php 
    endwhile;
    wp_reset_postdata();
    ?>


</div>


<div class="gray">

    <div class="container home-about">
            
            <? $the_query = new WP_Query( 'page_id=2' );
            while ( $the_query->have_posts() ) :
            $the_query->the_post();
            echo '<h1 style="margin-bottom: 0px;">'; the_title(); echo '</h1>'; 
            echo '<h3 style="text-align: center;" class="pink">By Coree Spencer</h3>'; 
            echo '<p>';the_excerpt(); echo '</p>'; 
            endwhile;
            wp_reset_postdata();
            ?>

           <center> <a class="button" href="<?php bloginfo('url'); ?>/new/about">Read More</a></center>

    </div>

</div>




<?php get_footer(); ?>
