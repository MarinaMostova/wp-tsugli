<?php
/*
Template Name: contacts
*/
?>

<?php get_header(); ?>

          <section class="hero-contacts container" style="background-image:url(<?php the_field('contacts-img') ?>)">
           <h2 class="hero__title"><?php the_field('contacts-text') ?></h2>
                       
      </section>


       <section class="cotacts-network">
            <div class='cotacts-network__container'>
                <ul class="contacts-network__list">

                    <li class="contacts-network__item">
                        <a href="" class="contacts-network__link">
                            <svg class="cotacts-network__icon" width="44px" height="44px">
                                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-telegram"></use>
                            </svg>
                            <span class="contacts-network__value"> <?php the_field('phone_3');?></span>
                        </a>
                    </li>

                    <li class="contacts-network__item">
                        <a href="tel:<?php the_field('phone_2');?>" class="contacts-network__link">
                             <svg class="cotacts-network__icon" width="44px" height="44px">
                                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-carbon_phone"></use>
                            </svg>
                          <span class="contacts-network__value"><?php the_field('phone');?></span>
                        </a>
                    </li>
                                              
                    <li class="contacts-network__item">
                        <a href="mailto:<?php the_field('email');?>" class="contacts-network__link">
                            <svg class="cotacts-network__icon" width="44px" height="44px">
                                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-mail"></use>
                            </svg>
                            <span class="contacts-network__value"> <?php the_field('email');?></span>
                        </a>
                    </li>

                    <li class="contacts-network__item">
                        <a href="<?php the_field('instagram_link');?>" class="contacts-network__link">
                            <svg class="cotacts-network__icon" width="44px" height="44px">
                                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                            </svg>
                         <span class="contacts-network__value"><?php the_field('instagram');?></span>
                        </a>
                    </li>

                    <li class="contacts-network__item">
                        <a href="<?php the_field('facebook_link_1');?>" class="contacts-network__link">
                            <svg class="cotacts-network__icon" width="44px" height="44px">
                                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
                            </svg>
                             <span class="contacts-network__value"><?php the_field('facebook_1');?></span>
                        </a>
                    </li>

                    <li class="contacts-network__item">
                        <a href="<?php the_field('facebook_link_2');?>" class="contacts-network__link">
                            <svg class="cotacts-network__icon" width="44px" height="44px">
                                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
                            </svg>
                            <span class="contacts-network__value"><?php the_field('facebook_2');?></span>
                        </a>
                     </li>
                </ul>
            </div>
        </section>

        <section class="contacts container">
            <div class="form__container" id='form__container'>
                <h3 class="form__title"><?php the_field('form_title');?></h3>
                <p class="form__text"><?php the_field('form_text');?></p>

                <?php echo do_shortcode('[contact-form-7 id="78" title="Контактна форма 1"]'); ?>

            </div>
            <div class="map__container">
                        <?php the_field('map'); ?>
            </div>
      </section>
    </main>
    

 <?php get_footer(); ?>