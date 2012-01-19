<div id="header">

    <div id="header-inside">

        <div id="header-inside-left">     

            <?php if ($logo): ?>
                <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>

            <?php if ($site_name || $site_slogan): ?>
                <div class="clearfix">
                    <?php if ($site_name): ?>
                        <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
                    <?php endif; ?>
                    <?php if ($site_slogan): ?>
                        <span id="slogan"><?php print $site_slogan; ?></span>
                    <?php endif; ?>
                </div>
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