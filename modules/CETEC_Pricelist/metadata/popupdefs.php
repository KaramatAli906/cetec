<?php
$popupMeta = array (
    'moduleMain' => 'CETEC_Pricelist',
    'varName' => 'CETEC_Pricelist',
    'orderBy' => 'cetec_pricelist.name',
    'whereClauses' => array (
  'name' => 'cetec_pricelist.name',
),
    'searchInputs' => array (
  0 => 'cetec_pricelist_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => 10,
    'default' => true,
  ),
  'CETEC_PRICELIST_PRODUCTTEMPLATES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CETEC_PRICELIST_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE',
    'id' => 'CETEC_PRICELIST_PRODUCTTEMPLATESPRODUCTTEMPLATES_IDA',
    'width' => 10,
    'default' => true,
  ),
  'CETEC_PRICELIST_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CETEC_PRICELIST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'CETEC_PRICELIST_ACCOUNTSACCOUNTS_IDA',
    'width' => 10,
    'default' => true,
  ),
  'DISCOUNT_PRICE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_DISCOUNT_PRICE',
    'currency_format' => true,
    'width' => 10,
  ),
  'COST_PRICE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_COST_PRICE',
    'currency_format' => true,
    'width' => 10,
  ),
  'LIST_PRICE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_LIST_PRICE',
    'currency_format' => true,
    'width' => 10,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => 10,
    'default' => true,
  ),
),
);
