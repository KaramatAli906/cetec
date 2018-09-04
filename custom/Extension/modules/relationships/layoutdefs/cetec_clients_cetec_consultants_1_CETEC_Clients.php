<?php
 // created: 2018-09-03 12:56:53
$layout_defs["CETEC_Clients"]["subpanel_setup"]['cetec_clients_cetec_consultants_1'] = array (
  'order' => 100,
  'module' => 'CETEC_Consultants',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CETEC_CLIENTS_CETEC_CONSULTANTS_1_FROM_CETEC_CONSULTANTS_TITLE',
  'get_subpanel_data' => 'cetec_clients_cetec_consultants_1',
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
