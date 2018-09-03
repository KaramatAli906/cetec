<?php
 // created: 2018-08-03 16:02:33
$layout_defs["CETEC_Vendors"]["subpanel_setup"]['cetec_vendors_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CETEC_VENDORS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'cetec_vendors_accounts',
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
