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
        <div class="scroll-icon"></div>
    </div>
    <div class="background"></div>
</section>

<section class="slide slide-studio light kenBurns  before" data-title="Студия" name="studio">
    <div class="content">
        <div class="scroll-icon top"></div>
        <div class="container">
            <div class="wrap-cont">

                <div class="t1185 header-light">
                    <?php get_template_part('inc/section-header'); ?>
                </div>

                <div class="w1185">
                    <div class="row">
                        <div class="left-col">
                            <div class="subtitle">the best for you</div>
                            <h2>лучшее<br> <span>для вас</span></h2>
                            <div class="text">
                                <p>
                                    На сегодняшний день в студии стиля «Grace» большой выбор моделей вечерних и
                                    свадебных
                                    платьев, которые можно просмотреть в каталоге нашего сайта и оформить заказ в режиме
                                    он-лайн.
                                </p>

                                <p>
                                    Если вы не нашли подходящего варианта, у нас можно воспользоваться услугой
                                    индивидуального пошива различных видов стильной одежды.
                                </p>
                            </div>

                            <div>
                                <a href="<?php echo get_permalink(5); ?>" class="btn-more">
                                    Записаться на встречу
                                    <svg class="icon icon-arr-right">
                                        <use xlink:href="#icon-arr-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="right-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/studio-bg.png" alt="bg-image">
                            <a href="<?php echo get_permalink(238); ?>" class="text-link">примеры работ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-icon"></div>
    </div>
    <div class="background"></div>
</section>

<section class="slide light kenBurns before" data-title="Отзывы" name="reviews">
    <div class="content">
        <div class="scroll-icon top"></div>
        <div class="container">
            <div class="wrap-cont">
                <div class="t1185 header-light">
                    <?php get_template_part('inc/section-header'); ?>
                </div>

                <div class="w1185">
                    <h2>Услуги пошива</h2>
                    <a href="<?php echo get_permalink(18); ?>" class="btn-more">посмотреть</a>
                </div>
            </div>
        </div>
        <div class="scroll-icon"></div>
    </div>
    <div class="background"></div>
</section>

<section class="slide slide-works light kenBurns before" data-title="Наши работы" name="works">
    <div class="content">
        <div class="t1185 header-light">
            <?php get_template_part('inc/section-header'); ?>
        </div>

        <div class="works-wrapper">
            <div class="work-item work-item1">
                <div class="inner">
                    <div class="subtitle">Наши работы</div>

                    <div class="title">Свадебные платья</div>

                    <div>
                        <a href="<?php echo get_permalink(238); ?>" class="btn-more">
                            Подробнее
                            <svg class="icon icon-arr-right">
                                <use xlink:href="#icon-arr-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="work-item work-item2">
                <div class="inner">
                    <div class="subtitle">Наши работы</div>

                    <div class="title">Вечернее и коктельные платья</div>

                    <div>
                        <a href="<?php echo get_permalink(240); ?>" class="btn-more">
                            Подробнее
                            <svg class="icon icon-arr-right">
                                <use xlink:href="#icon-arr-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="work-item work-item3">
                <div class="inner">
                    <div class="subtitle">Наши работы</div>

                    <div class="title">Пальто</div>

                    <div>
                        <a href="<?php echo get_permalink(242); ?>" class="btn-more">
                            Подробнее
                            <svg class="icon icon-arr-right">
                                <use xlink:href="#icon-arr-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="work-item work-item4">
                <div class="inner">
                    <div class="subtitle">Наши работы</div>

                    <div class="title">Мужская одежда</div>

                    <div>
                        <a href="<?php echo get_permalink(244); ?>" class="btn-more">
                            Подробнее
                            <svg class="icon icon-arr-right">
                                <use xlink:href="#icon-arr-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background"></div>
</section>

<section class="slide slide-contact light kenBurns before" data-title="Контакты" name="contact">
    <div class="content">
        <div class="scroll-icon top"></div>
        <div class="container">
            <div class="wrap-cont">
                <div class="t1185 header-light">
                    <?php get_template_part('inc/section-header'); ?>
                </div>

                <div class="w1185">
                    <div class="row row-wrapper">
                        <div class="left-col">
                            <div class="subtitle">the best for you</div>
                            <h2>Разрешите нам создать лучшее платье в вашей жизни!</h2>

                            <div class="info">
                                <div class="row">
                                    <div class="col-1">
                                        <div class="subtitle-2">Приходите</div>
                                        г. Черкассы, ул. Дашкевича, 19
                                        “Крещатик-Сити”, -1 этаж
                                        Студия стиля Grace (отдел №11)
                                    </div>
                                    <div class="col-2">
                                        <div class="subtitle-2">Звоните</div>
                                        <a href="tel:+380933657297" class="tr-tel">+38 093 365 72 97</a>
                                        <a href="tel:+380983267535" class="tr-tel">+38 098 326 75 35</a>
                                    </div>
                                </div>

                                <div class="row info-row2">
                                    <div class="col-1">
                                        <div class="subtitle-2">Пишите</div>
                                        <a href="viber://chat?number=+380933657297">+38 093 365 72 97 (Viber)</a>
                                        <a href="mailto:elenagracestudio@gmail.com">elenagracestudio@gmail.com</a>
                                    </div>
                                    <div class="col-2 socials">
                                        <div class="subtitle-2">Лайкайте</div>
                                        <a href="https://www.facebook.com/elenagracestudiowedding/" target="_blank">
                                            <svg class="icon icon-fb"><use xlink:href="#icon-fb"></use></svg>
                                            Facebook
                                        </a>
                                        <a href="https://www.instagram.com/elenagracestudio/" target="_blank">
                                            <svg class="icon icon-intsagram"><use xlink:href="#icon-intsagram"></use></svg>
                                            Instagram
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="right-col">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2594.0921787333687!2d32.06288361569522!3d49.44497477934925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14b7ce25a5683%3A0x57ee9f0aea5a52c!2z0YPQuy4g0J7RgdGC0LDRhNC40Y8g0JTQsNGI0LrQvtCy0LjRh9CwLCAxOSwg0KfQtdGA0LrQsNGB0YHRiywg0KfQtdGA0LrQsNGB0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDE4MDAw!5e0!3m2!1sru!2sua!4v1539934621669"
                                    width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background"></div>
</section>
