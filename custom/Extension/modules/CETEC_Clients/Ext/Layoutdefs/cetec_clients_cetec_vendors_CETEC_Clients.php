<?php
 // created: 2018-08-03 16:04:35
$layout_defs["CETEC_Clients"]["subpanel_setup"]['cetec_clients_cetec_vendors'] = array (
  'order' => 100,
  'module' => 'CETEC_Vendors',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CETEC_CLIENTS_CETEC_VENDORS_FROM_CETEC_VENDORS_TITLE',
  'get_subpanel_data' => 'cetec_clients_cetec_vendors',
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
