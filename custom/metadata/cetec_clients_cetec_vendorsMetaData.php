<?php
// created: 2018-08-03 16:04:35
$dictionary["cetec_clients_cetec_vendors"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cetec_clients_cetec_vendors' => 
    array (
      'lhs_module' => 'CETEC_Clients',
      'lhs_table' => 'cetec_clients',
      'lhs_key' => 'id',
      'rhs_module' => 'CETEC_Vendors',
      'rhs_table' => 'cetec_vendors',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cetec_clients_cetec_vendors_c',
      'join_key_lhs' => 'cetec_clients_cetec_vendorscetec_clients_ida',
      'join_key_rhs' => 'cetec_clients_cetec_vendorscetec_vendors_idb',
    ),
  ),
  'table' => 'cetec_clients_cetec_vendors_c',
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
    'cetec_clients_cetec_vendorscetec_clients_ida' => 
    array (
      'name' => 'cetec_clients_cetec_vendorscetec_clients_ida',
      'type' => 'id',
    ),
    'cetec_clients_cetec_vendorscetec_vendors_idb' => 
    array (
      'name' => 'cetec_clients_cetec_vendorscetec_vendors_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cetec_clients_cetec_vendors_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cetec_clients_cetec_vendors_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_clients_cetec_vendorscetec_clients_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cetec_clients_cetec_vendors_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_clients_cetec_vendorscetec_vendors_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cetec_clients_cetec_vendors_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cetec_clients_cetec_vendorscetec_clients_ida',
        1 => 'cetec_clients_cetec_vendorscetec_vendors_idb',
      ),
    ),
  ),
);