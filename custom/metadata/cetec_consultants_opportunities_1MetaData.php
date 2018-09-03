<?php
// created: 2018-08-20 09:35:13
$dictionary["cetec_consultants_opportunities_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cetec_consultants_opportunities_1' => 
    array (
      'lhs_module' => 'CETEC_Consultants',
      'lhs_table' => 'cetec_consultants',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cetec_consultants_opportunities_1_c',
      'join_key_lhs' => 'cetec_consultants_opportunities_1cetec_consultants_ida',
      'join_key_rhs' => 'cetec_consultants_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'cetec_consultants_opportunities_1_c',
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
    'cetec_consultants_opportunities_1cetec_consultants_ida' => 
    array (
      'name' => 'cetec_consultants_opportunities_1cetec_consultants_ida',
      'type' => 'id',
    ),
    'cetec_consultants_opportunities_1opportunities_idb' => 
    array (
      'name' => 'cetec_consultants_opportunities_1opportunities_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cetec_consultants_opportunities_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cetec_consultants_opportunities_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_consultants_opportunities_1cetec_consultants_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cetec_consultants_opportunities_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_consultants_opportunities_1opportunities_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cetec_consultants_opportunities_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cetec_consultants_opportunities_1opportunities_idb',
      ),
    ),
  ),
);