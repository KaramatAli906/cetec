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

$dictionary['CETEC_Demo_Products'] = array(
    'table' => 'cetec_demo_products',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'cost_price' => 
  array (
    'required' => true,
    'name' => 'cost_price',
    'vname' => 'LBL_COST_PRICE',
    'type' => 'currency',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => 0.0,
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'currency_id' => 
  array (
    'required' => false,
    'name' => 'currency_id',
    'vname' => 'LBL_CURRENCY_ID',
    'type' => 'currency_id',
    'massupdate' => false,
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
    'pii' => false,
    'calculated' => false,
    'len' => 36,
    'size' => '20',
    'dbType' => 'id',
    'studio' => false,
    'function' => 'getCurrencies',
    'function_bean' => 'Currencies',
  ),
  'base_rate' => 
  array (
    'required' => false,
    'name' => 'base_rate',
    'vname' => 'LBL_CURRENCY_RATE',
    'type' => 'decimal',
    'massupdate' => false,
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
    'pii' => false,
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'label' => 'LBL_CURRENCY_RATE',
    'studio' => false,
  ),
  'discount_price' => 
  array (
    'required' => true,
    'name' => 'discount_price',
    'vname' => 'LBL_DISCOUNT_PRICE',
    'type' => 'currency',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => 0.0,
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'list_price' => 
  array (
    'required' => true,
    'name' => 'list_price',
    'vname' => 'LBL_LIST_PRICE',
    'type' => 'currency',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => 0.0,
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'cost_usdollar' => 
  array (
    'name' => 'cost_usdollar',
    'vname' => 'LBL_COST_USDOLLAR',
    'type' => 'currency',
    'currency_id' => '-99',
    'len' => '26,6',
    'comment' => 'Cost expressed in USD',
    'studio' => 
    array (
      'mobile' => false,
    ),
    'readonly' => true,
    'is_base_currency' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'formula' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
    'calculated' => true,
    'enforced' => true,
  ),
  'discount_usdollar' => 
  array (
    'name' => 'discount_usdollar',
    'vname' => 'LBL_DISCOUNT_USDOLLAR',
    'type' => 'currency',
    'currency_id' => '-99',
    'len' => '26,6',
    'comment' => 'Discount price expressed in USD',
    'studio' => 
    array (
      'mobile' => false,
    ),
    'readonly' => true,
    'is_base_currency' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'formula' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
    'calculated' => true,
    'enforced' => true,
  ),
  'list_usdollar' => 
  array (
    'name' => 'list_usdollar',
    'vname' => 'LBL_LIST_USDOLLAR',
    'type' => 'currency',
    'currency_id' => '-99',
    'len' => '26,6',
    'comment' => 'List price expressed in USD',
    'studio' => 
    array (
      'mobile' => false,
    ),
    'readonly' => true,
    'is_base_currency' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'formula' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
    'calculated' => true,
    'enforced' => true,
  ),
  'quantity' => 
  array (
    'required' => true,
    'name' => 'quantity',
    'vname' => 'LBL_QUANTITY',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '11',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => 0,
    'max' => false,
    'validation' => 
    array (
      'type' => 'range',
      'min' => 0,
      'max' => false,
    ),
  ),
  'available_quantity' => 
  array (
    'required' => false,
    'name' => 'available_quantity',
    'vname' => 'LBL_AVAILABLE_QUANTITY',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => 'true',
    'len' => '11',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
    'formula' => 'subtract($quantity, countConditional($cetec_demos_cetec_demo_products,"status",createList("Rented")))',
    'enforced' => true,
  ),
  'serial_number' => 
  array (
    'required' => false,
    'name' => 'serial_number',
    'vname' => 'LBL_SERIAL_NUMBER',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('CETEC_Demo_Products','CETEC_Demo_Products', array('basic','team_security','assignable','taggable'));