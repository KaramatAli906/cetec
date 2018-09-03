<?php
// created: 2018-08-03 16:02:33
$dictionary["cetec_vendors_accounts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cetec_vendors_accounts' => 
    array (
      'lhs_module' => 'CETEC_Vendors',
      'lhs_table' => 'cetec_vendors',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cetec_vendors_accounts_c',
      'join_key_lhs' => 'cetec_vendors_accountscetec_vendors_ida',
      'join_key_rhs' => 'cetec_vendors_accountsaccounts_idb',
    ),
  ),
  'table' => 'cetec_vendors_accounts_c',
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
    'cetec_vendors_accountscetec_vendors_ida' => 
    array (
      'name' => 'cetec_vendors_accountscetec_vendors_ida',
      'type' => 'id',
    ),
    'cetec_vendors_accountsaccounts_idb' => 
    array (
      'name' => 'cetec_vendors_accountsaccounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cetec_vendors_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cetec_vendors_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_vendors_accountscetec_vendors_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cetec_vendors_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_vendors_accountsaccounts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cetec_vendors_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cetec_vendors_accountscetec_vendors_ida',
        1 => 'cetec_vendors_accountsaccounts_idb',
      ),
    ),
  ),
);