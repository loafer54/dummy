<?php



/**
 * This basic function allows you to customize the search-block-form
 * @param type $form
 * @param type $form_state
 * @param type $form_id 
 */
function dummy_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'search_block_form') {

        unset($form['search_block_form']['#title']);

        $form['search_block_form']['#title_display'] = 'invisible';
        $form_default = t('Search');
        $form['search_block_form']['#default_value'] = $form_default;
        $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');

        $form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}");
    }
}


drupal_add_js(drupal_get_path('theme', 'dummy') . '/js/jquery.cycle.all.min.js');

//drupal_add_js(drupal_get_path('theme', 'dummy') . '/js/jquery-1.6.1.min.js');
drupal_add_js(drupal_get_path('theme', 'dummy') . '/js/jquery.easing.1.3.js');
drupal_add_js(drupal_get_path('theme', 'dummy') . '/js/jquery.gridnav.js');
drupal_add_js(drupal_get_path('theme', 'dummy') . '/js/jquery.mousewheel.js');

//Initialize slideshow using theme settings
$effect=theme_get_setting('slideshow_effect','dummy');
$effect_time=theme_get_setting('slideshow_effect_time','dummy')*1000;

drupal_add_js('jQuery(document).ready(function($) {  

$("#slideshow").cycle({
	fx:    "'.$effect.'",
	speed:  "slow",
	timeout: "'.$effect_time.'",
	pager:  "#slider-navigation",
	pagerAnchorBuilder: function(idx, slide) {
		return "#slider-navigation li:eq(" + (idx) + ") a";
	},
	after: onAfter
});

function onAfter(curr, next, opts, fwd){
	var $ht = $(this).height();
	$(this).parent().animate({height: $ht});
}

});',
array('type' => 'inline', 'scope' => 'header', 'weight' => 5)
);


?>
