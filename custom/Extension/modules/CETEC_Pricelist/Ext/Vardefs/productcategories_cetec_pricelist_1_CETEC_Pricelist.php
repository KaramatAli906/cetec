<?php
// created: 2018-08-29 07:56:27
$dictionary["CETEC_Pricelist"]["fields"]["productcategories_cetec_pricelist_1"] = array (
  'name' => 'productcategories_cetec_pricelist_1',
  'type' => 'link',
  'relationship' => 'productcategories_cetec_pricelist_1',
  'source' => 'non-db',
  'module' => 'ProductCategories',
  'bean_name' => 'ProductCategory',
  'side' => 'right',
  'vname' => 'LBL_PRODUCTCATEGORIES_CETEC_PRICELIST_1_FROM_CETEC_PRICELIST_TITLE',
  'id_name' => 'productcategories_cetec_pricelist_1productcategories_ida',
  'link-type' => 'one',
);
$dictionary["CETEC_Pricelist"]["fields"]["productcategories_cetec_pricelist_1_name"] = array (
  'name' => 'productcategories_cetec_pricelist_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PRODUCTCATEGORIES_CETEC_PRICELIST_1_FROM_PRODUCTCATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'productcategories_cetec_pricelist_1productcategories_ida',
  'link' => 'productcategories_cetec_pricelist_1',
  'table' => 'product_categories',
  'module' => 'ProductCategories',
  'rname' => 'name',
  'required' => true,
);
$dictionary["CETEC_Pricelist"]["fields"]["productcategories_cetec_pricelist_1productcategories_ida"] = array (
  'name' => 'productcategories_cetec_pricelist_1productcategories_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PRODUCTCATEGORIES_CETEC_PRICELIST_1_FROM_CETEC_PRICELIST_TITLE_ID',
  'id_name' => 'productcategories_cetec_pricelist_1productcategories_ida',
  'link' => 'productcategories_cetec_pricelist_1',
  'table' => 'product_categories',
  'module' => 'ProductCategories',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
