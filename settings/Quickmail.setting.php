<?php

return array(
  'quickmail_allowed_group_ids' => array(
    'group_name' => 'QuickMail Settings',
    'group' => 'quickmail',
    'name' => 'quickmail_allowed_group_ids',
    'type' => 'Int',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Only these Mailing List groups will be offered as QuickMail recipients. '),
    'title' =>  ts('Allowed groups'),
    'help_text' => '',
    'html_type' => 'CheckBox',
    'quick_form_type' => 'Element',
    'X_options_callback' => 'CRM_Quickmail_Settings::getGroupOptions',
  ),  
 );