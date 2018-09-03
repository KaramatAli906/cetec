<?php
$module_name = 'CETEC_Vendors';
$_module_name = 'cetec_vendors';
$viewdefs[$module_name] = 
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
                'acl_module' => 'CETEC_Vendors',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
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
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'website',
              1 => 'phone_office',
              2 => 'employees',
              3 => 'phone_alternate',
              4 => 'email',
              5 => 'phone_fax',
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
                'name' => 'billing_address_street',
                'comment' => 'The street address used for billing address',
                'label' => 'LBL_BILLING_ADDRESS_STREET',
              ),
              1 => 
              array (
                'name' => 'shipping_address_street',
                'comment' => 'The street address used for for shipping purposes',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET',
              ),
              2 => 
              array (
                'name' => 'billing_address_street2',
                'label' => 'LBL_BILLING_ADDRESS_STREET2',
              ),
              3 => 
              array (
                'name' => 'shipping_address_street2',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET2',
              ),
              4 => 
              array (
                'name' => 'billing_address_city',
                'comment' => 'The city used for billing address',
                'label' => 'LBL_BILLING_ADDRESS_CITY',
              ),
              5 => 
              array (
                'name' => 'shipping_address_city',
                'comment' => 'The city used for the shipping address',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
              ),
              6 => 
              array (
                'name' => 'billing_address_state',
                'comment' => 'The state used for billing address',
                'label' => 'LBL_BILLING_ADDRESS_STATE',
              ),
              7 => 
              array (
                'name' => 'shipping_address_state',
                'comment' => 'The state used for the shipping address',
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
              ),
              8 => 
              array (
                'name' => 'billing_address_postalcode',
                'comment' => 'The postal code used for billing address',
                'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
              ),
              9 => 
              array (
                'name' => 'shipping_address_postalcode',
                'comment' => 'The zip code used for the shipping address',
                'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
              ),
              10 => 
              array (
                'name' => 'billing_address_country',
                'comment' => 'The country used for the billing address',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              ),
              11 => 
              array (
                'name' => 'shipping_address_country',
                'comment' => 'The country used for the shipping address',
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
              ),
              12 => 
              array (
                'name' => 'territory_c',
                'label' => 'LBL_TERRITORY',
              ),
              13 => 
              array (
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'twitter',
              1 => 
              array (
                'name' => 'instagram',
                'label' => 'LBL_INSTAGRAM',
              ),
              2 => 
              array (
                'name' => 'facebook',
                'comment' => 'The facebook name of the company',
                'label' => 'LBL_FACEBOOK',
              ),
              3 => 
              array (
                'name' => 'googleplus',
                'comment' => 'The Google Plus name of the company',
                'label' => 'LBL_GOOGLEPLUS',
              ),
              4 => 'cetec_vendors_type',
              5 => 'industry',
              6 => 
              array (
                'name' => 'ownership',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              10 => 'assigned_user_name',
              11 => 
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
              12 => 'team_name',
              13 => 
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
