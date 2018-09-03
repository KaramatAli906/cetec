<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$module_name = 'CETEC_Demos';
$viewdefs[$module_name]['base']['view']['subpanel-list'] = array(
  'panels' =>
  array(
    array(
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' =>
      array(
        array(
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        array (
          'name' => 'cetec_demos_cetec_demo_products_name',
          'label' => 'LBL_CETEC_DEMOS_CETEC_DEMO_PRODUCTS_FROM_CETEC_DEMO_PRODUCTS_TITLE',
          'enabled' => true,
          'id' => 'CETEC_DEMOS_CETEC_DEMO_PRODUCTSCETEC_DEMO_PRODUCTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        array (
          'name' => 'cetec_demos_accounts_name',
          'label' => 'LBL_CETEC_DEMOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          'enabled' => true,
          'id' => 'CETEC_DEMOS_ACCOUNTSACCOUNTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        array (
          'name' => 'start_date',
          'label' => 'LBL_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        array (
          'name' => 'end_date',
          'label' => 'LBL_END_DATE',
          'enabled' => true,
          'default' => true,
        ),
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        array (
          'name' => 'return_state',
          'label' => 'LBL_RETURN_STATE',
          'enabled' => true,
          'default' => true,
        ),
        array(
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
    'orderBy' => array(
        'field' => 'date_modified',
        'direction' => 'desc',
    ),
);
