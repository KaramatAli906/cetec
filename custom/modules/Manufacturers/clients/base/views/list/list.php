<?php
$viewdefs['Manufacturers'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'favorites' => false,
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'link' => true,
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'billing_address_city_c',
                'label' => 'LBL_BILLING_ADDRESS_CITY',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'billing_address_country_c',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'phone_office_c',
                'label' => 'LBL_PHONE_OFFICE',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'status',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'list_order',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
