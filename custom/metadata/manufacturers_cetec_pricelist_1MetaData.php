<?php
// created: 2018-08-29 06:34:18
$dictionary["manufacturers_cetec_pricelist_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'manufacturers_cetec_pricelist_1' => 
    array (
      'lhs_module' => 'Manufacturers',
      'lhs_table' => 'manufacturers',
      'lhs_key' => 'id',
      'rhs_module' => 'CETEC_Pricelist',
      'rhs_table' => 'cetec_pricelist',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'manufacturers_cetec_pricelist_1_c',
      'join_key_lhs' => 'manufacturers_cetec_pricelist_1manufacturers_ida',
      'join_key_rhs' => 'manufacturers_cetec_pricelist_1cetec_pricelist_idb',
    ),
  ),
  'table' => 'manufacturers_cetec_pricelist_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'manufacturers_cetec_pricelist_1manufacturers_ida' => 
    array (
      'name' => 'manufacturers_cetec_pricelist_1manufacturers_ida',
      'type' => 'id',
    ),
    'manufacturers_cetec_pricelist_1cetec_pricelist_idb' => 
    array (
      'name' => 'manufacturers_cetec_pricelist_1cetec_pricelist_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_manufacturers_cetec_pricelist_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_manufacturers_cetec_pricelist_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'manufacturers_cetec_pricelist_1manufacturers_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_manufacturers_cetec_pricelist_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'manufacturers_cetec_pricelist_1cetec_pricelist_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'manufacturers_cetec_pricelist_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'manufacturers_cetec_pricelist_1cetec_pricelist_idb',
      ),
    ),
  ),
);