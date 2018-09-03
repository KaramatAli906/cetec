<?php
// created: 2018-08-30 10:17:41
$dictionary["CETEC_Demo_Products"]["fields"]["manufacturers_cetec_demo_products_1"] = array (
  'name' => 'manufacturers_cetec_demo_products_1',
  'type' => 'link',
  'relationship' => 'manufacturers_cetec_demo_products_1',
  'source' => 'non-db',
  'module' => 'Manufacturers',
  'bean_name' => 'Manufacturer',
  'side' => 'right',
  'vname' => 'LBL_MANUFACTURERS_CETEC_DEMO_PRODUCTS_1_FROM_CETEC_DEMO_PRODUCTS_TITLE',
  'id_name' => 'manufacturers_cetec_demo_products_1manufacturers_ida',
  'link-type' => 'one',
);
$dictionary["CETEC_Demo_Products"]["fields"]["manufacturers_cetec_demo_products_1_name"] = array (
  'name' => 'manufacturers_cetec_demo_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MANUFACTURERS_CETEC_DEMO_PRODUCTS_1_FROM_MANUFACTURERS_TITLE',
  'save' => true,
  'id_name' => 'manufacturers_cetec_demo_products_1manufacturers_ida',
  'link' => 'manufacturers_cetec_demo_products_1',
  'table' => 'manufacturers',
  'module' => 'Manufacturers',
  'rname' => 'name',
);
$dictionary["CETEC_Demo_Products"]["fields"]["manufacturers_cetec_demo_products_1manufacturers_ida"] = array (
  'name' => 'manufacturers_cetec_demo_products_1manufacturers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MANUFACTURERS_CETEC_DEMO_PRODUCTS_1_FROM_CETEC_DEMO_PRODUCTS_TITLE_ID',
  'id_name' => 'manufacturers_cetec_demo_products_1manufacturers_ida',
  'link' => 'manufacturers_cetec_demo_products_1',
  'table' => 'manufacturers',
  'module' => 'Manufacturers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
