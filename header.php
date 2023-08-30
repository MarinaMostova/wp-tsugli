<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset='<?php bloginfo('charset'); ?>' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Щербаті Цуглі</title>
      <?php wp_head(); ?>
  </head>

  <body>
    
    <header class="header">
      <div class="container ">
        <div class="header__wrapper section">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  class="logo">
            <img class="logo__icon" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="" />
            <img class="logo__text" src="<?php bloginfo('template_url'); ?>/assets/images/logo-text.png" alt="" />
          </a>

          <button  class="button-menu is-open"
                    type="button"
                    aria-controls="menu-container"
                    data-menu-button>

            <svg width="44px" height="44px" aria-label="Перемикач мобільного меню">
              <use class="button-menu__burger" href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-menu"></use>
              <use class="button-menu__cros" href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-x"></use>
            </svg>
            
          </button>

 <div class="menu-container" id="menu-container" data-menu>

          <nav class="nav-menu">
            <?php
            $menu = wp_nav_menu( array(
            'theme_location'  => 'main-menu',
            'container'       => false,
            'menu_class'      => 'nav-menu__list',    
            'menu_id'         => 'nav',
            'echo'            => false,           
            'fallback_cb'     => 'wp_page_menu', 
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            ) );

            if ($menu): ?>
            
          <?php echo $menu; ?>
                    
          <?php endif; ?>
              </nav>
       
          <a class="header__link" href="#"
            >Задонатити
            <svg class="offering__icon" width="24px" height="24px">
              <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
            </svg>
          </a>   

        <ul class="header-networks">
          <li class="header-networks__item" >
            <a href="">
              <svg class="header-networks__icon" width="44px" height="44px">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-viber"></use>
              </svg>
            </a>
          </li>
          <li class="header-networks__item">
            <a href="">
              <svg class="header-networks__icon" width="44px" height="44px">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
              </svg>
            </a>
          </li>
          <li class="header-networks__item">
            <a href="mailto:<?php echo esc_attr(get_field('email', 16)); ?>"
              ><svg class="header-networks__icon" width="44px" height="44px">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-mail"></use></svg
            ></a>
          </li>
          <li class="header-networks__item">
            <a href="<?php echo esc_attr(get_field('instagram_link', 16));?>">
            <svg class="header-networks__icon" width="44px" height="44px">
              <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
            </svg>
            </a>
          </li>
          <li class="header-networks__item">
            <a href="">
              <svg class="header-networks__icon" width="44px" height="44px">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-whatsapp"></use></svg
            ></a>
          </li>
        </ul>
        </div>
         
        </div>
      </div>
    </header>



  

      
     
 
