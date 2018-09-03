<?php
// created: 2018-08-10 13:46:55
$dictionary["CETEC_Demos"]["fields"]["cetec_demos_cetec_demo_products"] = array (
  'name' => 'cetec_demos_cetec_demo_products',
  'type' => 'link',
  'relationship' => 'cetec_demos_cetec_demo_products',
  'source' => 'non-db',
  'module' => 'CETEC_Demo_Products',
  'bean_name' => 'CETEC_Demo_Products',
  'side' => 'right',
  'vname' => 'LBL_CETEC_DEMOS_CETEC_DEMO_PRODUCTS_FROM_CETEC_DEMOS_TITLE',
  'id_name' => 'cetec_demos_cetec_demo_productscetec_demo_products_ida',
  'link-type' => 'one',
);
$dictionary["CETEC_Demos"]["fields"]["cetec_demos_cetec_demo_products_name"] = array (
  'name' => 'cetec_demos_cetec_demo_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_DEMOS_CETEC_DEMO_PRODUCTS_FROM_CETEC_DEMO_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'cetec_demos_cetec_demo_productscetec_demo_products_ida',
  'link' => 'cetec_demos_cetec_demo_products',
  'table' => 'cetec_demo_products',
  'module' => 'CETEC_Demo_Products',
  'rname' => 'name',
);
$dictionary["CETEC_Demos"]["fields"]["cetec_demos_cetec_demo_productscetec_demo_products_ida"] = array (
  'name' => 'cetec_demos_cetec_demo_productscetec_demo_products_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_DEMOS_CETEC_DEMO_PRODUCTS_FROM_CETEC_DEMOS_TITLE_ID',
  'id_name' => 'cetec_demos_cetec_demo_productscetec_demo_products_ida',
  'link' => 'cetec_demos_cetec_demo_products',
  'table' => 'cetec_demo_products',
  'module' => 'CETEC_Demo_Products',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
