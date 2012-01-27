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

?>
