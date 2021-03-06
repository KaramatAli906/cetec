<?php
// created: 2018-08-10 13:46:55
$dictionary["cetec_demos_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cetec_demos_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'CETEC_Demos',
      'rhs_table' => 'cetec_demos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cetec_demos_accounts_c',
      'join_key_lhs' => 'cetec_demos_accountsaccounts_ida',
      'join_key_rhs' => 'cetec_demos_accountscetec_demos_idb',
    ),
  ),
  'table' => 'cetec_demos_accounts_c',
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
    'cetec_demos_accountsaccounts_ida' => 
    array (
      'name' => 'cetec_demos_accountsaccounts_ida',
      'type' => 'id',
    ),
    'cetec_demos_accountscetec_demos_idb' => 
    array (
      'name' => 'cetec_demos_accountscetec_demos_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cetec_demos_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cetec_demos_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_demos_accountsaccounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cetec_demos_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_demos_accountscetec_demos_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cetec_demos_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cetec_demos_accountscetec_demos_idb',
      ),
    ),
  ),
);