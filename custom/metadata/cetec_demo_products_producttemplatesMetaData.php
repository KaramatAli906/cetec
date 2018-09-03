<?php
// created: 2018-08-10 13:46:56
$dictionary["cetec_demo_products_producttemplates"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'cetec_demo_products_producttemplates' => 
    array (
      'lhs_module' => 'CETEC_Demo_Products',
      'lhs_table' => 'cetec_demo_products',
      'lhs_key' => 'id',
      'rhs_module' => 'ProductTemplates',
      'rhs_table' => 'product_templates',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cetec_demo_products_producttemplates_c',
      'join_key_lhs' => 'cetec_demo_products_producttemplatescetec_demo_products_ida',
      'join_key_rhs' => 'cetec_demo_products_producttemplatesproducttemplates_idb',
    ),
  ),
  'table' => 'cetec_demo_products_producttemplates_c',
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
    'cetec_demo_products_producttemplatescetec_demo_products_ida' => 
    array (
      'name' => 'cetec_demo_products_producttemplatescetec_demo_products_ida',
      'type' => 'id',
    ),
    'cetec_demo_products_producttemplatesproducttemplates_idb' => 
    array (
      'name' => 'cetec_demo_products_producttemplatesproducttemplates_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cetec_demo_products_producttemplates_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cetec_demo_products_producttemplates_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_demo_products_producttemplatescetec_demo_products_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cetec_demo_products_producttemplates_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_demo_products_producttemplatesproducttemplates_idb',
        1 => 'deleted',
      ),
    ),
  ),
);