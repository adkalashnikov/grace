<!-- Navigation -->
<nav class="side small">
    <div class="navigation">
        <ul></ul>
    </div>
</nav>


<nav class="sidebar sidebar-menu left" data-sidebar-id="1">
    <div class="close">закрыть</div>

    <div class="content">
        <div class="sbm-logo">
            <div class="logo"><a href="<?php echo home_url(); ?>"></a></div>
        </div>
        <div class="sbm-navs">
            <div class="sbmn-item">
                <?php wp_nav_menu(array('menu' => 5)); ?>
            </div>
            <div class="sbmn-item">
                <?php wp_nav_menu(array('menu' => 6)); ?>
            </div>
            <div class="sbmn-item">
                <?php wp_nav_menu(array('menu' => 7)); ?>
            </div>
            <div class="sbmn-item">
                <?php wp_nav_menu(array('menu' => 8)); ?>
            </div>
            <div class="sbmn-item">
                <?php wp_nav_menu(array('menu' => 12)); ?>
            </div>

        </div>
        <div class="sbm-foo">
            <?php get_template_part('inc/phone-link'); ?>
            <a href="http://www.odnoklassniki.ru/profile/249373513305" class="ok" target="_blank"></a>
            <a href="https://vk.com/gracestudio_com_ua" class="vk" target="_blank"></a>
        </div>
    </div>
</nav>


<section class="slide fade kenBurns before slide-1" data-title="Главная">
    <div class="content">
        <div class="container">
            <div class="wrap-cont">

                <div class="t1185">
                    <?php get_template_part('inc/section-header'); ?>
                </div>

                <div class="w1185" id="home">
                    <?php get_template_part('inc/home-slider'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="background"></div>
</section>


<section class=" slide fade kenBurns  before" data-title="Студия" name="studio">
    <div class="content">
        <div class="container">
            <div class="wrap-cont">

                <div class="t1185">
                    <?php get_template_part('inc/section-header'); ?>
                </div>

                <div class="w1185">
                    <h2>Студия</h2>
                    <a href="<?php echo get_permalink(5); ?>" class="btn-more">посмотреть</a>
                </div>

                <div class="b1185 mainp">
                    <?php wp_nav_menu(array('menu' => 2)); ?>
                </div>


            </div>
        </div>
    </div>
    <div class="background"
         style="background-image:url(http://gracestudio.com.ua/wp-content/uploads/2016/02/DB4_8738.jpg)"></div>
</section>


<section class="slide fade kenBurns before" data-title="Отзывы" name="reviews">
    <div class="content">
        <div class="container">
            <div class="wrap-cont">
                <div class="t1185">
                    <?php get_template_part('inc/section-header'); ?>
                </div>

                <div class="w1185">
                    <h2>Услуги пошива</h2>
                    <a href="<?php echo get_permalink(18); ?>" class="btn-more">посмотреть</a>
                </div>

                <div class="b1185 mainp">
                    <?php wp_nav_menu(array('menu' => 3)); ?>
                </div>

            </div>
        </div>
    </div>
    <div class="background"
         style="background-image:url(http://gracestudio.com.ua/wp-content/uploads/2016/03/4-65-of-83.jpg)"></div>
</section>

<section class="slide fade kenBurns before" data-title="Наши работы" name="works">
    <div class="content">
        <div class="container">
            <div class="wrap-cont">

                <div class="t1185">
                    <?php get_template_part('inc/section-header'); ?>
                </div>

                <div class="w1185 justify">

                    <h2>Наши работы</h2>
                    <a href="<?php echo get_permalink(238); ?>" class="btn-more">посмотреть</a>
                </div>

                <div class="b1185 mainp">
                    <?php wp_nav_menu(array('menu' => 4)); ?>
                </div>

            </div>
        </div>
    </div>
    <div class="background"
         style="background-image:url(http://gracestudio.com.ua/wp-content/uploads/2016/03/jQByLWsRiQ0.jpg)"></div>
</section>

<section class="slide fade kenBurns before" data-title="Контакты" name="contact">
    <div class="content">
        <div class="container">
            <div class="wrap-cont">
                <div class="t1185">
                    <?php get_template_part('inc/section-header'); ?>
                </div>

                <div class="w1185 cont-650">
                    <h2 class="scont-title">Контакты</h2>

                    <div class="scont-left">
                        <div class="scl-item it1">
                            <?php get_template_part('inc/phone-link'); ?>
                        </div>
                        <div class="scl-item it2">
                            г. Черкассы, ул Дашкевича 19, <br>
                            “Крещатик Сити” -1 этаж, отдел 11
                        </div>
                        <div class="scl-item it3">
                            <a href="skype:elena.gracestudio?chat">elena.gracestudio</a>
                        </div>
                        <div class="scl-item it4">
                            <a href="mailto:elenagracestudio@gmail.com">elenagracestudio@gmail.com</a>
                        </div>
                    </div>
                    <div class="scont-right">
                        <div class="scr-title">Оставить заявку</div>
                        <?php echo do_shortcode('[contact-form-7 id="4" title="Контакты"]'); ?>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="b1185 mainp cont-foo">
                    <a href="https://vk.com/murzak_av" target="_blank">Designed by Murzak</a>
                    <a href="https://vk.com/html_developer" target="_blank">Powered by Adkalashnikov</a>
                </div>

            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(<?php bloginfo('template_url'); ?>/images/s4.jpg)"></div>
</section>
