<?php get_header(); ?>

    <main>
      <section class="hero-events container" style="background-image:url(<?php the_field('img', '14'); ?>)">
           <h1 class="hero__title"><?php the_field('title',  '14');?></h1>
                        
      </section>
      <div class='container'>
      <h2 class="events-title"><?php the_field('title_post'); ?></h2>

      <div class="blog-wrap">
          <section class='posts'>
            <ul>
            <?php
		    while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		

         
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
            </ul>
     </section>
  
    <?php get_sidebar(); ?>
      </div>
      </div>
    </main>

 <?php get_footer(); ?>