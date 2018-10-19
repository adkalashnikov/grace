<nav class="sidebar sidebar-menu left" data-sidebar-id="1">
    <div class="close">закрыть</div>

    <div class="content">
        <div class="sbm-logo">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <svg class="icon icon-logo"><use xlink:href="#icon-logo"></use></svg>
                </a>
            </div>
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
                <?php wp_nav_menu(array('menu' => 9)); ?>
            </div>
        </div>

        <div class="sbm-foo">
            <?php get_template_part('inc/phone-link' ); ?>
            <a href="http://www.odnoklassniki.ru/profile/249373513305" class="ok" target="_blank"></a>
            <a href="https://vk.com/gracestudio_com_ua" class="vk" target="_blank"></a>
        </div>
    </div>
</nav>
