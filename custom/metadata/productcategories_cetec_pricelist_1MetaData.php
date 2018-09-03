<?php
// created: 2018-08-29 07:56:27
$dictionary["productcategories_cetec_pricelist_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'productcategories_cetec_pricelist_1' => 
    array (
      'lhs_module' => 'ProductCategories',
      'lhs_table' => 'product_categories',
      'lhs_key' => 'id',
      'rhs_module' => 'CETEC_Pricelist',
      'rhs_table' => 'cetec_pricelist',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'productcategories_cetec_pricelist_1_c',
      'join_key_lhs' => 'productcategories_cetec_pricelist_1productcategories_ida',
      'join_key_rhs' => 'productcategories_cetec_pricelist_1cetec_pricelist_idb',
    ),
  ),
  'table' => 'productcategories_cetec_pricelist_1_c',
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
    'productcategories_cetec_pricelist_1productcategories_ida' => 
    array (
      'name' => 'productcategories_cetec_pricelist_1productcategories_ida',
      'type' => 'id',
    ),
    'productcategories_cetec_pricelist_1cetec_pricelist_idb' => 
    array (
      'name' => 'productcategories_cetec_pricelist_1cetec_pricelist_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_productcategories_cetec_pricelist_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_productcategories_cetec_pricelist_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'productcategories_cetec_pricelist_1productcategories_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_productcategories_cetec_pricelist_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'productcategories_cetec_pricelist_1cetec_pricelist_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'productcategories_cetec_pricelist_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'productcategories_cetec_pricelist_1cetec_pricelist_idb',
      ),
    ),
  ),
);