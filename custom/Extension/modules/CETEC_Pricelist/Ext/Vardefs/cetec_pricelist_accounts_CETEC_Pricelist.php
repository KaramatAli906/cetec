<?php
// created: 2018-08-01 12:14:51
$dictionary["CETEC_Pricelist"]["fields"]["cetec_pricelist_accounts"] = array (
  'name' => 'cetec_pricelist_accounts',
  'type' => 'link',
  'relationship' => 'cetec_pricelist_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_CETEC_PRICELIST_ACCOUNTS_FROM_CETEC_PRICELIST_TITLE',
  'id_name' => 'cetec_pricelist_accountsaccounts_ida',
  'link-type' => 'one',
);
$dictionary["CETEC_Pricelist"]["fields"]["cetec_pricelist_accounts_name"] = array (
  'name' => 'cetec_pricelist_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_PRICELIST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'cetec_pricelist_accountsaccounts_ida',
  'link' => 'cetec_pricelist_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["CETEC_Pricelist"]["fields"]["cetec_pricelist_accountsaccounts_ida"] = array (
  'name' => 'cetec_pricelist_accountsaccounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_PRICELIST_ACCOUNTS_FROM_CETEC_PRICELIST_TITLE_ID',
  'id_name' => 'cetec_pricelist_accountsaccounts_ida',
  'link' => 'cetec_pricelist_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
