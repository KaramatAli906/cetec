<?php
// created: 2018-08-10 13:46:55
$dictionary["CETEC_Demos"]["fields"]["cetec_demos_accounts"] = array (
  'name' => 'cetec_demos_accounts',
  'type' => 'link',
  'relationship' => 'cetec_demos_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_CETEC_DEMOS_ACCOUNTS_FROM_CETEC_DEMOS_TITLE',
  'id_name' => 'cetec_demos_accountsaccounts_ida',
  'link-type' => 'one',
);
$dictionary["CETEC_Demos"]["fields"]["cetec_demos_accounts_name"] = array (
  'name' => 'cetec_demos_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_DEMOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'cetec_demos_accountsaccounts_ida',
  'link' => 'cetec_demos_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["CETEC_Demos"]["fields"]["cetec_demos_accountsaccounts_ida"] = array (
  'name' => 'cetec_demos_accountsaccounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CETEC_DEMOS_ACCOUNTS_FROM_CETEC_DEMOS_TITLE_ID',
  'id_name' => 'cetec_demos_accountsaccounts_ida',
  'link' => 'cetec_demos_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
