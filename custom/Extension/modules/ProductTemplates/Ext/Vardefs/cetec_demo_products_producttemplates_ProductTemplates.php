<?php
// created: 2018-08-10 13:46:56
$dictionary["ProductTemplate"]["fields"]["cetec_demo_products_producttemplates"] = array (
  'name' => 'cetec_demo_products_producttemplates',
  'type' => 'link',
  'relationship' => 'cetec_demo_products_producttemplates',
  'source' => 'non-db',
  'module' => 'CETEC_Demo_Products',
  'bean_name' => 'CETEC_Demo_Products',
  'vname' => 'LBL_CETEC_DEMO_PRODUCTS_PRODUCTTEMPLATES_FROM_CETEC_DEMO_PRODUCTS_TITLE',
  'id_name' => 'cetec_demo_products_producttemplatescetec_demo_products_ida',
);
$dictionary["ProductTemplate"]["fields"]["cetec_demo_products_producttemplates_name"] = array (
  'name' => 'cetec_demo_products_producttemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_DEMO_PRODUCTS_PRODUCTTEMPLATES_FROM_CETEC_DEMO_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'cetec_demo_products_producttemplatescetec_demo_products_ida',
  'link' => 'cetec_demo_products_producttemplates',
  'table' => 'cetec_demo_products',
  'module' => 'CETEC_Demo_Products',
  'rname' => 'name',
);
$dictionary["ProductTemplate"]["fields"]["cetec_demo_products_producttemplatescetec_demo_products_ida"] = array (
  'name' => 'cetec_demo_products_producttemplatescetec_demo_products_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_DEMO_PRODUCTS_PRODUCTTEMPLATES_FROM_CETEC_DEMO_PRODUCTS_TITLE_ID',
  'id_name' => 'cetec_demo_products_producttemplatescetec_demo_products_ida',
  'link' => 'cetec_demo_products_producttemplates',
  'table' => 'cetec_demo_products',
  'module' => 'CETEC_Demo_Products',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
