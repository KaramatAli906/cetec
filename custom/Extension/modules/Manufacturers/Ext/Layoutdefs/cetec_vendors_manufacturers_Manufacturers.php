<?php
 // created: 2018-08-03 16:02:33
$layout_defs["Manufacturers"]["subpanel_setup"]['cetec_vendors_manufacturers'] = array (
  'order' => 100,
  'module' => 'CETEC_Vendors',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CETEC_VENDORS_MANUFACTURERS_FROM_CETEC_VENDORS_TITLE',
  'get_subpanel_data' => 'cetec_vendors_manufacturers',
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