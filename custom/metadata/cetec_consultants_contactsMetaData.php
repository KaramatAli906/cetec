<?php
// created: 2018-08-03 16:02:32
$dictionary["cetec_consultants_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cetec_consultants_contacts' => 
    array (
      'lhs_module' => 'CETEC_Consultants',
      'lhs_table' => 'cetec_consultants',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cetec_consultants_contacts_c',
      'join_key_lhs' => 'cetec_consultants_contactscetec_consultants_ida',
      'join_key_rhs' => 'cetec_consultants_contactscontacts_idb',
    ),
  ),
  'table' => 'cetec_consultants_contacts_c',
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
    'cetec_consultants_contactscetec_consultants_ida' => 
    array (
      'name' => 'cetec_consultants_contactscetec_consultants_ida',
      'type' => 'id',
    ),
    'cetec_consultants_contactscontacts_idb' => 
    array (
      'name' => 'cetec_consultants_contactscontacts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cetec_consultants_contacts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cetec_consultants_contacts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_consultants_contactscetec_consultants_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cetec_consultants_contacts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cetec_consultants_contactscontacts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cetec_consultants_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cetec_consultants_contactscetec_consultants_ida',
        1 => 'cetec_consultants_contactscontacts_idb',
      ),
    ),
  ),
);