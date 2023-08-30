<?php
/*
Template Name: events
*/
?>



<?php get_header(); ?>

    <main>
      <section class="hero-events container" style="background-image:url(<?php the_field('img'); ?>)">
           <h1 class="hero__title"><?php the_field('title');?></h1>
                        
      </section>
      <div class='container'>
      <h2 class="events-title"><?php the_field('title_post'); ?></h2>

      <div class="blog-wrap">
          <section class='posts'>
            <ul>
              <?php
            global $post;

            $myposts = get_posts([ 
              'numberposts' => -1,
              'posts_per_page' => 6,
              'paged' => get_query_var('paged') ? get_query_var('paged') : 1 

            ]);

            if( $myposts ){
              foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>

            <li class='posts__item'>
           <div class='post__img'>
  <?php
  if (has_post_thumbnail()) {
    the_post_thumbnail(array(288, 306));
  } else {
    echo '<img src="' . get_template_directory_uri() . '/assets/images/post-image_event.jpg" alt="Изображение">';
  }
  ?>
</div>
              <div class='post__wrap'>
                <ul class='post__info'>
                <li>
                   <svg  width="24px" height="24px">
                      <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-calendar"></use>
                   </svg>
                  <span><?php the_time('F j'); ?></span>
                 </li>  
                    <li>
                   <svg  width="24px" height="24px">
                       <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-folder"></use>
                   </svg>
                  <span><?php the_category(', '); ?></span>
                 </li>  
                  <li>
                   <svg  width="24px" height="24px">
                      <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-chat"></use>
                   </svg>
                  <span><?php comments_number('Без коментарів', '1 коментар', '% коментарів'); ?></span>
                 </li>  

                </ul>


                 <h3 ><?php the_title(); ?></h3>
                 <?php the_content(); ?>
                 <a href="<?php the_permalink(); ?>" class="post__link">Дізнатися Більше</a>
              </div>
              
            </li>
                <?php 
              }
            } else {
        echo '<li> Подій не заплановано.</li>';
            }
            wp_reset_postdata(); 
            ?>
            </ul>

            
<?php
$posts_per_page = 6;

$total_posts = wp_count_posts()->publish;

// Вычисляем общее количество страниц пагинации
$total_pages = ceil($total_posts / $posts_per_page);

// Получаем текущий номер страницы
$current_page = get_query_var('paged') ? get_query_var('paged') : 1;

// Формируем массив с аргументами для функции paginate_links()
$pagination_args = array(
  'base' => get_pagenum_link(1) . '%_%',
  'format' => '/page/%#%',
  'current' => $current_page,
  'total' => $total_pages,
  'prev_text' => '',
  'next_text' => '',
);

// Выводим пагинацию
echo '<div class="pagination">';
echo paginate_links($pagination_args);
echo '</div>';
?>


    </section>
  
    <?php get_sidebar(); ?>
      </div>
      </div>
    </main>

 <?php get_footer(); ?>