<?php
// created: 2018-08-10 13:46:56
$dictionary["CETEC_Demo_Products"]["fields"]["cetec_demo_products_producttemplates"] = array (
  'name' => 'cetec_demo_products_producttemplates',
  'type' => 'link',
  'relationship' => 'cetec_demo_products_producttemplates',
  'source' => 'non-db',
  'module' => 'ProductTemplates',
  'bean_name' => 'ProductTemplate',
  'vname' => 'LBL_CETEC_DEMO_PRODUCTS_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE',
  'id_name' => 'cetec_demo_products_producttemplatesproducttemplates_idb',
);
$dictionary["CETEC_Demo_Products"]["fields"]["cetec_demo_products_producttemplates_name"] = array (
  'name' => 'cetec_demo_products_producttemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_DEMO_PRODUCTS_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'cetec_demo_products_producttemplatesproducttemplates_idb',
  'link' => 'cetec_demo_products_producttemplates',
  'table' => 'product_templates',
  'module' => 'ProductTemplates',
  'rname' => 'name',
);
$dictionary["CETEC_Demo_Products"]["fields"]["cetec_demo_products_producttemplatesproducttemplates_idb"] = array (
  'name' => 'cetec_demo_products_producttemplatesproducttemplates_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_DEMO_PRODUCTS_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE_ID',
  'id_name' => 'cetec_demo_products_producttemplatesproducttemplates_idb',
  'link' => 'cetec_demo_products_producttemplates',
  'table' => 'product_templates',
  'module' => 'ProductTemplates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
