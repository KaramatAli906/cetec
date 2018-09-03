<?php
 // created: 2018-08-01 12:14:51
$layout_defs["Accounts"]["subpanel_setup"]['cetec_pricelist_accounts'] = array (
  'order' => 100,
  'module' => 'CETEC_Pricelist',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CETEC_PRICELIST_ACCOUNTS_FROM_CETEC_PRICELIST_TITLE',
  'get_subpanel_data' => 'cetec_pricelist_accounts',
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
