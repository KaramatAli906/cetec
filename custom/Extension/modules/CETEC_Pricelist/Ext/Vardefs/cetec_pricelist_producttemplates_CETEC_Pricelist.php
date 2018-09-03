<?php
// created: 2018-08-01 12:14:51
$dictionary["CETEC_Pricelist"]["fields"]["cetec_pricelist_producttemplates"] = array (
  'name' => 'cetec_pricelist_producttemplates',
  'type' => 'link',
  'relationship' => 'cetec_pricelist_producttemplates',
  'source' => 'non-db',
  'module' => 'ProductTemplates',
  'bean_name' => 'ProductTemplate',
  'side' => 'right',
  'vname' => 'LBL_CETEC_PRICELIST_PRODUCTTEMPLATES_FROM_CETEC_PRICELIST_TITLE',
  'id_name' => 'cetec_pricelist_producttemplatesproducttemplates_ida',
  'link-type' => 'one',
);
$dictionary["CETEC_Pricelist"]["fields"]["cetec_pricelist_producttemplates_name"] = array (
  'name' => 'cetec_pricelist_producttemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_PRICELIST_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'cetec_pricelist_producttemplatesproducttemplates_ida',
  'link' => 'cetec_pricelist_producttemplates',
  'table' => 'product_templates',
  'module' => 'ProductTemplates',
  'rname' => 'name',
);
$dictionary["CETEC_Pricelist"]["fields"]["cetec_pricelist_producttemplatesproducttemplates_ida"] = array (
  'name' => 'cetec_pricelist_producttemplatesproducttemplates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_PRICELIST_PRODUCTTEMPLATES_FROM_CETEC_PRICELIST_TITLE_ID',
  'id_name' => 'cetec_pricelist_producttemplatesproducttemplates_ida',
  'link' => 'cetec_pricelist_producttemplates',
  'table' => 'product_templates',
  'module' => 'ProductTemplates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
