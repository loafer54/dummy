<div id="header">

    <div id="header-inside">

        <div id="header-inside-left">     
            <?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>
        </div>

        <div id="header-inside-right">
            <?php print render($page['search_area']); ?> 
        </div>

    </div>

</div>


<div id="header-menu">

    <div id="header-menu-inside">
        header-menu-inside
    </div>

</div>