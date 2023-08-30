  <aside class='sidebar__container'>
      <ul id="sidebar">
	      <?php dynamic_sidebar( 'sidebar' ); ?>


<?php
$categories = get_categories();

echo '<ul>';
echo '<li><a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '"><span>Все категории</span> <span>' . count($categories) . '</span></a></li>'; // Ссылка на все категории

foreach ($categories as $category) {
    echo '<li><a href="' . get_category_link($category->term_id) . '"><span>' . $category->name . '</span> <span>' . $category->count . '</span></a></li>';
}
echo '</ul>';
?>


      </ul>

  </aside>