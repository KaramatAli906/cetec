<?php
// created: 2018-09-03 12:56:53
$dictionary["cetec_clients_cetec_consultants_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cetec_clients_cetec_consultants_1' => 
    array (
      'lhs_module' => 'CETEC_Clients',
      'lhs_table' => 'cetec_clients',
      'lhs_key' => 'id',
      'rhs_module' => 'CETEC_Consultants',
      'rhs_table' => 'cetec_consultants',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cetec_clients_cetec_consultants_1_c',
      'join_key_lhs' => 'cetec_clients_cetec_consultants_1cetec_clients_ida',
      'join_key_rhs' => 'cetec_clients_cetec_consultants_1cetec_consultants_idb',
    ),
  ),
  'table' => 'cetec_clients_cetec_consultants_1_c',
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
    'cetec_clients_cetec_consultants_1cetec_clients_ida' => 
    array (
      'name' => 'cetec_clients_cetec_consultants_1cetec_clients_ida',
      'type' => 'id',
    ),
    'cetec_clients_cetec_consultants_1cetec_consultants_idb' => 
    array (
      'name' => 'cetec_clients_cetec_consultants_1cetec_consultants_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cetec_clients_cetec_consultants_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cetec_clients_cetec_consultants_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_clients_cetec_consultants_1cetec_clients_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cetec_clients_cetec_consultants_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_clients_cetec_consultants_1cetec_consultants_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cetec_clients_cetec_consultants_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cetec_clients_cetec_consultants_1cetec_clients_ida',
        1 => 'cetec_clients_cetec_consultants_1cetec_consultants_idb',
      ),
    ),
  ),
);