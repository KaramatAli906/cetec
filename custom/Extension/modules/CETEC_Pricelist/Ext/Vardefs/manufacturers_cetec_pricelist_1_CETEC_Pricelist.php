<?php
// created: 2018-08-29 06:34:18
$dictionary["CETEC_Pricelist"]["fields"]["manufacturers_cetec_pricelist_1"] = array (
  'name' => 'manufacturers_cetec_pricelist_1',
  'type' => 'link',
  'relationship' => 'manufacturers_cetec_pricelist_1',
  'source' => 'non-db',
  'module' => 'Manufacturers',
  'bean_name' => 'Manufacturer',
  'side' => 'right',
  'vname' => 'LBL_MANUFACTURERS_CETEC_PRICELIST_1_FROM_CETEC_PRICELIST_TITLE',
  'id_name' => 'manufacturers_cetec_pricelist_1manufacturers_ida',
  'link-type' => 'one',
);
$dictionary["CETEC_Pricelist"]["fields"]["manufacturers_cetec_pricelist_1_name"] = array (
  'name' => 'manufacturers_cetec_pricelist_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MANUFACTURERS_CETEC_PRICELIST_1_FROM_MANUFACTURERS_TITLE',
  'save' => true,
  'id_name' => 'manufacturers_cetec_pricelist_1manufacturers_ida',
  'link' => 'manufacturers_cetec_pricelist_1',
  'table' => 'manufacturers',
  'module' => 'Manufacturers',
  'rname' => 'name',
  'required' => true,
);
$dictionary["CETEC_Pricelist"]["fields"]["manufacturers_cetec_pricelist_1manufacturers_ida"] = array (
  'name' => 'manufacturers_cetec_pricelist_1manufacturers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MANUFACTURERS_CETEC_PRICELIST_1_FROM_CETEC_PRICELIST_TITLE_ID',
  'id_name' => 'manufacturers_cetec_pricelist_1manufacturers_ida',
  'link' => 'manufacturers_cetec_pricelist_1',
  'table' => 'manufacturers',
  'module' => 'Manufacturers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
