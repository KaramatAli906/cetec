<?php
 // created: 2018-08-03 16:02:32
$layout_defs["CETEC_Consultants"]["subpanel_setup"]['cetec_consultants_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CETEC_CONSULTANTS_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'cetec_consultants_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
