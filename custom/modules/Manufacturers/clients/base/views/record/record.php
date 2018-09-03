<?php
$viewdefs['Manufacturers'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Manufacturers',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'divider',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'name',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'website_c',
                'label' => 'LBL_WEBSITE',
              ),
              1 => 
              array (
                'name' => 'industry_c',
                'label' => 'LBL_INDUSTRY',
              ),
              2 => 
              array (
                'name' => 'account_type_c',
                'label' => 'LBL_ACCOUNT_TYPE',
              ),
              3 => 
              array (
                'name' => 'phone_office_c',
                'label' => 'LBL_PHONE_OFFICE',
              ),
              4 => 'status',
              5 => 'list_order',
              6 => 
              array (
                'name' => 'territory_c',
                'label' => 'LBL_TERRITORY',
              ),
              7 => 
              array (
                'name' => 'email_c',
                'label' => 'LBL_EMAIL',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'billing_address_street_c',
                'studio' => 'visible',
                'label' => 'LBL_BILLING_ADDRESS_STREET',
              ),
              1 => 
              array (
                'name' => 'shipping_address_street_c',
                'studio' => 'visible',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET',
              ),
              2 => 
              array (
                'name' => 'billing_address_street_2_c',
                'label' => 'LBL_BILLING_ADDRESS_STREET_2',
              ),
              3 => 
              array (
                'name' => 'shipping_address_street_2_c',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET_2',
              ),
              4 => 
              array (
                'name' => 'billing_address_city_c',
                'label' => 'LBL_BILLING_ADDRESS_CITY',
              ),
              5 => 
              array (
                'name' => 'shipping_address_city_c',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
              ),
              6 => 
              array (
                'name' => 'billing_address_state_c',
                'label' => 'LBL_BILLING_ADDRESS_STATE',
              ),
              7 => 
              array (
                'name' => 'shipping_address_state_c',
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
              ),
              8 => 
              array (
                'name' => 'billing_address_postalcode_c',
                'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
              ),
              9 => 
              array (
                'name' => 'shipping_address_postalcode_c',
                'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
              ),
              10 => 
              array (
                'name' => 'billing_address_country_c',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              ),
              11 => 
              array (
                'name' => 'shipping_address_country_c',
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'phone_alternate_c',
                'label' => 'LBL_PHONE_ALTERNATE',
              ),
              1 => 
              array (
                'name' => 'phone_fax_c',
                'label' => 'LBL_PHONE_FAX',
              ),
              2 => 
              array (
                'name' => 'facebook_c',
                'label' => 'LBL_FACEBOOK',
              ),
              3 => 
              array (
                'name' => 'instagram_c',
                'label' => 'LBL_INSTAGRAM',
              ),
              4 => 
              array (
                'name' => 'twitter_c',
                'label' => 'LBL_TWITTER',
              ),
              5 => 
              array (
                'name' => 'googleplus_c',
                'label' => 'LBL_GOOGLEPLUS',
              ),
              6 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
              7 => 
              array (
                'name' => 'ownership_c',
                'label' => 'LBL_OWNERSHIP',
              ),
              8 => 
              array (
                'name' => 'employees_c',
                'label' => 'LBL_EMPLOYEES',
              ),
              9 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              10 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
