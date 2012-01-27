<div id="footer-bottom">

    <div id="footer-bottom-inside">

        <div id="footer-bottom-left">
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            <?php print render($page['footer']); ?>
        </div>

        <div id="footer-bottom-right">
            <?php print render($page['footer_bottom_right']); ?>
        </div>

    </div>

</div>