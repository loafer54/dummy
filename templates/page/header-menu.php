<div id="header-menu">

    <div id="header-menu-inside">
        <?php
        $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
        print drupal_render($main_menu_tree);
        ?>
    </div>

</div>