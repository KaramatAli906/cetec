<?php
 // created: 2018-08-03 16:04:35
$layout_defs["Accounts"]["subpanel_setup"]['cetec_clients_accounts'] = array (
  'order' => 100,
  'module' => 'CETEC_Clients',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CETEC_CLIENTS_ACCOUNTS_FROM_CETEC_CLIENTS_TITLE',
  'get_subpanel_data' => 'cetec_clients_accounts',
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
