<?php
$viewdefs['Products'] =
array (
  'base' =>
  array (
    'view' =>
    array (
      'list' =>
      array (
        'panels' =>
        array (
          0 =>
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' =>
            array (
              0 =>
              array (
                'name' => 'name',
                'link' => true,
                'label' => 'LBL_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 =>
              array (
                'name' => 'account_name',
                'label' => 'LBL_ACCOUNT_NAME',
                'related_fields' =>
                array (
                  0 => 'account_id',
                ),
                'default' => true,
                'enabled' => true,
              ),
              2 =>
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'default' => true,
                'enabled' => true,
              ),
              3 =>
              array (
                'name' => 'quote_name',
                'link' => true,
                'label' => 'LBL_ASSOCIATED_QUOTE',
                'related_fields' =>
                array (
                  0 => 'quote_id',
                ),
                'enabled' => true,
                'default' => true,
              ),
              4 =>
              array (
                'name' => 'quantity',
                'label' => 'LBL_QUANTITY',
                'enabled' => true,
                'default' => true,
              ),
              5 =>
              array (
                'name' => 'discount_price',
                'type' => 'currency',
                'related_fields' =>
                array (
                  0 => 'discount_price',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'default' => true,
                'enabled' => true,
              ),
              6 =>
              array (
                'name' => 'cost_price',
                'type' => 'currency',
                'related_fields' =>
                array (
                  0 => 'cost_price',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'default' => true,
                'enabled' => true,
              ),
              7 =>
              array (
                'name' => 'discount_amount',
                'type' => 'commission',
                'related_fields' =>
                array (
                  0 => 'discount_select',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'default' => true,
                'enabled' => true,
              ),
              8 =>
              array (
                'name' => 'brokerage_c',
                'label' => 'LBL_BROKERAGE',
                'enabled' => true,
                'default' => true,
              ),
              9 =>
              array (
                'name' => 'commission_c',
                'type' => 'commission',
                'related_fields' =>
                array (
                  0 => 'commission_select_c',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'default' => true,
                'enabled' => true,
              ),
              10 =>
              array (
                'name' => 'assigned_user_name',
                'default' => true,
                'enabled' => true,
              ),
              10 => 'quantity',
            ),
          ),
        ),
      ),
    ),
  ),
);
