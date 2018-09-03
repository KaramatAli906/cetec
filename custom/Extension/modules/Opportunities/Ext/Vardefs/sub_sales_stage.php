<?php

$dictionary['Opportunity']['fields']['sales_stage']['options'] = 'custom_sales_stage_dom';
$dictionary['Opportunity']['fields']['sales_stage']['default'] = '';

$dictionary['Opportunity']['fields']['sub_sales_stage'] = array(
    'visibility_grid' =>
    array(
        'trigger' => 'sales_stage',
        'values' =>
        array(
            'Closed Won' =>
            array(
                0 => 'Project Won(Converts to Sale)',
                1 => 'Order Received',
                2 => 'Project Completed',
            ),
            'Closed Lost' =>
            array(
                0 => 'Lost (Overbudget)',
                1 => 'Lost (To Competitor)',
                2 => 'Project Dead',
            ),
        ),
    ),
    'required' => false,
    'name' => 'sub_sales_stage',
    'vname' => 'LBL_SUB_SLAE_STAGE',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'default' => '',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'sub_sale_stage_dom',
    'dependency' => NULL,
);
