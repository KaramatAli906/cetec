<?php
 // created: 2018-08-10 13:46:55
$layout_defs["Accounts"]["subpanel_setup"]['cetec_demos_accounts'] = array (
  'order' => 100,
  'module' => 'CETEC_Demos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CETEC_DEMOS_ACCOUNTS_FROM_CETEC_DEMOS_TITLE',
  'get_subpanel_data' => 'cetec_demos_accounts',
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
