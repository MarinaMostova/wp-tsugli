 <?php get_header(); ?>

<main>
    <section class="hero-events container" style="background-image:url(<?php the_field('img', '14'); ?>)">
      <h1 class="hero__title"><?php the_field('title', '14');?></h1>
    </section>

    <div class='container'>
      <h2 class="events-title">
        <?php printf( esc_html__( 'Результат пошуку за фразою: %s', 'tsugli' ), '<span>' . get_search_query() . '</span>' ); ?>
        <?php $search_query = new WP_Query( array( 's' => get_search_query(), 'post_type' => 'post' ) ); ?>
      </h2> 

    <div class="blog-wrap">
      <section class='posts'>
        <ul>

          <?php
        if ($search_query->have_posts()) {
            while ($search_query->have_posts()) {
            $search_query->the_post(); 
            get_template_part( 'template-parts/content', 'search' );
            }
        } else { echo '<li class="not-found"> Нічого не знайдено.</li>';}
        wp_reset_postdata(); ?>

        </ul>

      </section>

<?php get_sidebar(); ?>

   </div>
   </div>
</main>

 <?php get_footer(); ?>