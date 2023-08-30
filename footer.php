<footer class="footer">
       <div class="container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo--footer">
        <img class="logo__icon" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="" />
        <span class="logo__text--footer"> Щербаті Цуглі </span>
      </a>

      <div class="footer__wrapper">

       <?php

$menu = wp_nav_menu( array(
 'theme_location'  => 'footer-bottom-menu',
  'container'       => false,
 	'menu_class'     => 'footer-menu',  
  'menu_id'         => 'footer-nav',  
	'echo'           => false,           
	'fallback_cb'    => 'wp_page_menu', 
 	'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>'
  ) );

  if ($menu): ?>

<nav class="site-nav">
<?php echo $menu; ?>
</nav>
          
<?php endif; ?>  
  
        <ul class="footer-networks">
          <li  class="footer-networks__item">
            <a href="">
              <svg class="footer__icon" width="44px" height="44px">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-viber"></use>
              </svg>
            </a>
          </li>
          <li class="footer-networks__item">
            <a href="">
              <svg class="footer__icon" width="44px" height="44px">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
              </svg>
            </a>
          </li>
          <li class="footer-networks__item">
            <a href=""
              ><svg class="footer__icon" width="44px" height="44px">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-mail"></use></svg
            ></a>
          </li>
          <li class="footer-networks__item">
            <a href=""><svg class="footer__icon" width="44px" height="44px">
              <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
            </svg>
            </a>
          </li>
          <li class="footer-networks__item">
            <a href="">
              <svg class="footer__icon" width="44px" height="44px">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-whatsapp"></use></svg
            ></a>
          </li>
        </ul>
      </div>
      <p class="footer__rights">
        &copy 2023 Щербаті Цуглі. All rights reserved.
      </p>
    
    </div>

    </footer>
        <?php wp_footer(); ?>

  </body>
</html>
  
  
