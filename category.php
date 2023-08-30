 <?php get_header(); ?>

<main>
    <section class="hero-events container" style="background-image:url(<?php the_field('img', '14'); ?>)">
      <h1 class="hero__title"><?php the_field('title', '14');?></h1>
    </section>

    <div class='container'>
      <h2 class="events-title">

<?php printf( esc_html__( 'Категорія: %s', 'tsugli' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>

     </h2> 

    <div class="blog-wrap">
      <section class='posts'>
        <ul>

        <?php
        if (have_posts()) {
        while (have_posts()) {
     the_post();             
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