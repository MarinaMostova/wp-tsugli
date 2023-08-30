<?php
/*
Template Name: front-page
*/
?>

<?php get_header(); ?>

    <main class= "main" style="background-image:url(<?php the_field('bg_img') ?>)">
    
        <section class="hero container" style="background-image:url(<?php the_field('hero_img') ?>)">
         <h1 class="hero-name">Щербаті Цуглі</h1>
         <h2 class="hero__title"><?php the_field('hero_title'); ?></h2>
           <p class="hero__text"><?php the_field('hero_text'); ?></p>
          <a href="#" class="hero__button"><?php the_field('hero_button'); ?></a>
          
          
          <div class="services">
          <h2 class="services-name">Наші розваги</h2>
          <ul class="services__list">
          
          <li class="services__item">
              <h3 class="services__title"><?php the_field('services_1'); ?></h3>
              <img src="<?php the_field('services_img_1'); ?>" alt="" />
            </li>

            <li class="services__item">
              <h3 class="services__title"><?php the_field('services_2'); ?></h3>
              <img src="<?php the_field('services_img_2'); ?>" alt="" />
            </li>

            <li class="services__item">
              <h3 class="services__title"><?php the_field('services_3'); ?></h3>
              <img src="<?php the_field('services_img_3'); ?>" alt="" />
            </li>

          </ul>
        </div>

      </section>
    
      <section class="about-us">
        <div class="container">
          <div class="about-us__description">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-big.png" alt="Логотип щербатих цуглів" />
            <p class="text">
             <?php the_field('about-us'); ?>
            </p>
          </div>
        </div>
      </section>

      <section class="gallery">
        <div class="gallery__container container">
          <h2 class="title">Галерея</h2>
              <ul class="gallery__buttons">
                <li>
                  <button class="gallery__button active" data-category="all">Всі</button>
                </li>
                <li>
                  <button class="gallery__button" data-category="museum">Музей-Хаб</button>
                </li>
                <li>
                  <button class="gallery__button" data-category="horses">Поліські Коні</button>
                </li>
                <li>
                  <button class="gallery__button" data-category="exhibition">Виставки</button>
                </li>
                <li>
                  <button class="gallery__button" data-category="excursions">Екскурсії</button>
                </li>
                <li>
                  <button class="gallery__button" data-category="life">Наше життя</button>
                </li>
              </ul>
        </div>

      <?php if(have_rows('gallery')):?>

        <ul class="galerry__list">

        <?php 

           $counter = 0;

          while(have_rows('gallery')): the_row();

        if ($counter >= 12) {
        break;
      }

        $image=get_sub_field('img');
        $picture=$image['sizes']['custom-size'];
        $category = get_sub_field('category'); 


        ?>

          <li class="gallery__item" data-category="<?php echo $category; ?>">
            <img src="<?php echo $picture; ?>" alt="<?php echo $image['alt']; ?>" />
          </li>

<?php 
 $counter++;
endwhile; ?>

         </ul>
<?php endif; ?>
      
      </section>

      <section class="offering container">
        <h2 class="offering__title">Підтримай нас!</h2>
        <p class="offering__text">
          Завітай до нас. Екскурсії, майстер-класи, виставки, музей.
        </p>
        <a class="offering__link" href="#"
          >Докладніше
          <svg class="offering__icon" width="24px" height="24px">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-right"></use>
          </svg>
        </a>
      </section>

      <section class="events container">
        <div class="events__container">
          <h2 class="title">Події</h2>
          <a href="#" class="events__button">Подивитись всі</a>
        </div>
        <ul class="events__list">


 <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
  'posts_per_page' => 3

]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>

          <li class="events__item">

          <div class='events_img'>
             <?php
  if (has_post_thumbnail()) {
    the_post_thumbnail(array(400, 256));
  } else {
    echo '<img src="' . get_template_directory_uri() . '/assets/images/post-image_event.jpg" alt="Изображение">';
  }
  ?>
      
          </div>
        
            <div class="events__box">
              <h3 class="events__title"><?php the_title();?></h3>
             <?php the_content();?>
              <a href="<?php the_permalink(); ?>" class="events__link">Дивитися більше</a>
            </div>

          </li>


<?php 	}} wp_reset_postdata();?>

        </ul>
      </section>
    </main>
 <?php get_footer(); ?>

  