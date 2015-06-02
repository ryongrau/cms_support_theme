<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function cms_support_theme_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'apachesolr_panels_search_form') {
    $form['apachesolr_panels_search_form']['#title'] = t('Search this site'); // Change the text on the label element
    $form['apachesolr_panels_search_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['apachesolr_panels_search_form']['#size'] = 40;  // define size of the textfield
    $form['apachesolr_panels_search_form']['#default_value'] = t('Search this site'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/img/picto_magnifying_glass.png');
    // Add extra attributes to the text box
    $form['apachesolr_panels_search_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = '';}";
    $form['apachesolr_panels_search_form']['#attributes']['onfocus'] = "if (this.value == 'Search this site') {this.value = '';}";
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.apachesolr_panels_search_form.value=='Search this site...'){ alert('Please enter a search'); return false; }";
    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['apachesolr_panels_search_form']['#attributes']['placeholder'] = t('Search this site...');
  }

  if ($form_id == 'apachesolr_panels_search_block') {
    $form['apachesolr_panels_search_form']['#title'] = t('Search this site'); // Change the text on the label element
    $form['apachesolr_panels_search_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['apachesolr_panels_search_form']['#size'] = 40;  // define size of the textfield
    $form['aapachesolr_panels_search_form']['#default_value'] = t('Search this site'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/img/picto_magnifying_glass.png');
    // Add extra attributes to the text box
    $form['apachesolr_panels_search_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = '';}";
    $form['apachesolr_panels_search_form']['#attributes']['onfocus'] = "if (this.value == 'Search this site') {this.value = '';}";
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.apachesolr_panels_search_form.value=='Search this site...'){ alert('Please enter a search'); return false; }";
    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['apachesolr_panels_search_form']['#attributes']['placeholder'] = t('Search this site...');
  }
}

?>