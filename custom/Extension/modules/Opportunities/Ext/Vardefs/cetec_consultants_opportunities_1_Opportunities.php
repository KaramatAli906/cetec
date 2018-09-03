<?php
// created: 2018-08-20 09:35:13
$dictionary["Opportunity"]["fields"]["cetec_consultants_opportunities_1"] = array (
  'name' => 'cetec_consultants_opportunities_1',
  'type' => 'link',
  'relationship' => 'cetec_consultants_opportunities_1',
  'source' => 'non-db',
  'module' => 'CETEC_Consultants',
  'bean_name' => 'CETEC_Consultants',
  'side' => 'right',
  'vname' => 'LBL_CETEC_CONSULTANTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'cetec_consultants_opportunities_1cetec_consultants_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["cetec_consultants_opportunities_1_name"] = array (
  'name' => 'cetec_consultants_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_CONSULTANTS_OPPORTUNITIES_1_FROM_CETEC_CONSULTANTS_TITLE',
  'save' => true,
  'id_name' => 'cetec_consultants_opportunities_1cetec_consultants_ida',
  'link' => 'cetec_consultants_opportunities_1',
  'table' => 'cetec_consultants',
  'module' => 'CETEC_Consultants',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["cetec_consultants_opportunities_1cetec_consultants_ida"] = array (
  'name' => 'cetec_consultants_opportunities_1cetec_consultants_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_CONSULTANTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'cetec_consultants_opportunities_1cetec_consultants_ida',
  'link' => 'cetec_consultants_opportunities_1',
  'table' => 'cetec_consultants',
  'module' => 'CETEC_Consultants',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
