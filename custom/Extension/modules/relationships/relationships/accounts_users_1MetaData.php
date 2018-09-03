<?php
// created: 2018-07-27 15:00:56
$dictionary["accounts_users_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_users_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_users_1_c',
      'join_key_lhs' => 'accounts_users_1accounts_ida',
      'join_key_rhs' => 'accounts_users_1users_idb',
    ),
  ),
  'table' => 'accounts_users_1_c',
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
    'accounts_users_1accounts_ida' => 
    array (
      'name' => 'accounts_users_1accounts_ida',
      'type' => 'id',
    ),
    'accounts_users_1users_idb' => 
    array (
      'name' => 'accounts_users_1users_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_accounts_users_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accounts_users_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_users_1accounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_accounts_users_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_users_1users_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'accounts_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_users_1accounts_ida',
        1 => 'accounts_users_1users_idb',
      ),
    ),
  ),
);