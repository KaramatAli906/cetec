<?php
$viewdefs['Products'] = 
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
            'type' => 'rowaction',
            'event' => 'button:cancel_button:click',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn btn-invisible btn-link',
            'showOn' => 'edit',
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
                'acl_module' => 'Products',
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
                'label' => 'LBL_MODULE_NAME_SINGULAR',
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
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
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'product_template_name',
                'label' => 'LBL_PRODUCT_TEMPLATE',
              ),
              1 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_ACCOUNT_NAME',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
              ),
              2 => 
              array (
                'name' => 'quote_name',
                'label' => 'LBL_QUOTE_NAME',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'quote_id',
                ),
              ),
              3 => 'contact_name',
              4 => 
              array (
                'name' => 'discount',
                'type' => 'fieldset',
                'css_class' => 'quote-discount-percent',
                'label' => 'LBL_DISCOUNT_TYPE',
                'fields' => 
                array (
                  0 => 
                  array (
                    'type' => 'discount-select',
                    'name' => 'discount_select',
                    'no_default_action' => true,
                    'buttons' => 
                    array (
                      0 => 
                      array (
                        'type' => 'rowaction',
                        'name' => 'select_discount_amount_button',
                        'label' => 'LBL_DISCOUNT_AMOUNT',
                        'event' => 'button:discount_select_change:click',
                      ),
                      1 => 
                      array (
                        'type' => 'rowaction',
                        'name' => 'select_discount_percent_button',
                        'label' => 'LBL_DISCOUNT_PERCENT',
                        'event' => 'button:discount_select_change:click',
                      ),
                    ),
                  ),
                ),
              ),
              5 => 
              array (
                'name' => 'discount_amount',
                'type' => 'discount',
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
              ),
              6 => 
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
              ),
              7 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
              ),
              8 => 
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
              ),
              9 => 
              array (
                'name' => 'list_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'list_price',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              10 => 'quantity',
              11 => 
              array (
                'name' => 'unit_c',
                'label' => 'LBL_UNIT',
              ),
              12 => 'mft_part_num',
              13 => 
              array (
                'name' => 'vendor_part_num',
                'comment' => 'Vendor part number',
                'label' => 'LBL_VENDOR_PART_NUM',
              ),
              14 => 
              array (
                'name' => 'alt_vendor_part_num_c',
                'label' => 'LBL_ALT_VENDOR_PART_NUM',
              ),
              15 => 
              array (
                'name' => 'pricing_formula',
                'comment' => 'Pricing formula (ex: Fixed, Markup over Cost)',
                'label' => 'LBL_PRICING_FORMULA',
              ),
              16 => 
              array (
                'name' => 'dimensions_c',
                'label' => 'LBL_DIMENSIONS',
              ),
              17 => 
              array (
                'name' => 'dimensions_shipping_c',
                'label' => 'LBL_DIMENSIONS_SHIPPING',
              ),
              18 => 
              array (
                'name' => 'weight',
                'comment' => 'Weight of the product',
                'label' => 'LBL_WEIGHT',
              ),
              19 => 
              array (
                'name' => 'weight_shipping_c',
                'label' => 'LBL_WEIGHT_SHIPPING',
              ),
              20 => 
              array (
                'name' => 'pricing_factor',
                'comment' => 'Variable pricing factor depending on pricing_formula',
                'label' => 'LBL_PRICING_FACTOR',
              ),
              21 => 
              array (
                'name' => 'landing_factor_c',
                'label' => 'LBL_LANDING_FACTOR',
              ),
              22 => 
              array (
                'name' => 'warrantee_period_c',
                'label' => 'LBL_WARRANTEE_PERIOD',
              ),
              23 => 
              array (
                'name' => 'warrantee_details_c',
                'studio' => 'visible',
                'label' => 'LBL_WARRANTEE_DETAILS',
              ),
              24 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
            ),
          ),
          2 => 
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
                'name' => 'category_name',
                'studio' => 
                array (
                  'editview' => false,
                  'detailview' => false,
                  'quickcreate' => false,
                ),
                'label' => 'LBL_CATEGORY_NAME',
              ),
              1 => 
              array (
                'name' => 'manufacturer_name',
                'related_fields' => 
                array (
                  0 => 'manufacturer_id',
                ),
                'label' => 'LBL_MANUFACTURER_NAME',
              ),
              2 => 'assigned_user_name',
              3 => 'team_name',
              4 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              5 => 
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
              6 => 
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
