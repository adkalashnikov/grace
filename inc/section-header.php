<div class="section-header">
    <div class="sidebarTrigger" data-sidebar-id="1" id="menu-btn" title="меню">
        <svg class="icon icon-hamburger"><use xlink:href="#icon-hamburger"></use></svg>
    </div>

    <div class="nav-left">
        <div class="sections-nav">
            <a href="#studio">Студия</a>
            <a href="#reviews">Отзывы</a>
            <a href="#works">Наши работы</a>
            <a href="#contact">Контакты</a>
        </div>
    </div>

    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <svg class="icon icon-logo"><use xlink:href="#icon-logo"></use></svg>
        </a>
    </div>

    <div class="nav-right">
        <?php wp_nav_menu(array('menu' => 19)); ?>
    </div>

    <div class="top-right">
        <?php get_template_part('inc/phone-link'); ?>
        <a href="https://www.facebook.com/elenagracestudiowedding/" target="_blank">
            <svg class="icon icon-fb"><use xlink:href="#icon-fb"></use></svg>
        </a>
        <a href="https://www.instagram.com/elenagracestudio/" target="_blank">
            <svg class="icon icon-intsagram"><use xlink:href="#icon-intsagram"></use></svg>
        </a>
    </div>
</div>
