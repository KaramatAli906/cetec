<?php
$module_name = 'CETEC_Pricelist';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'cetec_pricelist_producttemplates_name',
                'label' => 'LBL_CETEC_PRICELIST_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE',
                'enabled' => true,
                'id' => 'CETEC_PRICELIST_PRODUCTTEMPLATESPRODUCTTEMPLATES_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'cetec_pricelist_accounts_name',
                'label' => 'LBL_CETEC_PRICELIST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'CETEC_PRICELIST_ACCOUNTSACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'discount_price',
                'label' => 'LBL_DISCOUNT_PRICE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'cost_price',
                'label' => 'LBL_COST_PRICE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'list_price',
                'label' => 'LBL_LIST_PRICE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              6 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
              ),
              7 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              8 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
