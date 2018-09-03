<?php
// created: 2018-08-20 09:19:47
$dictionary["opportunities_users_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_users_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_users_1_c',
      'join_key_lhs' => 'opportunities_users_1opportunities_ida',
      'join_key_rhs' => 'opportunities_users_1users_idb',
    ),
  ),
  'table' => 'opportunities_users_1_c',
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
    'opportunities_users_1opportunities_ida' => 
    array (
      'name' => 'opportunities_users_1opportunities_ida',
      'type' => 'id',
    ),
    'opportunities_users_1users_idb' => 
    array (
      'name' => 'opportunities_users_1users_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_opportunities_users_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_opportunities_users_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_users_1opportunities_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_opportunities_users_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_users_1users_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'opportunities_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_users_1opportunities_ida',
        1 => 'opportunities_users_1users_idb',
      ),
    ),
  ),
);