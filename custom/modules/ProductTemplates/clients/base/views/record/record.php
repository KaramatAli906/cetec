<?php
$viewdefs['ProductTemplates'] = 
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
                'acl_module' => 'ProductTemplates',
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
              0 => 'status',
              1 => 
              array (
                'name' => 'website',
                'type' => 'url',
              ),
              2 => 'date_available',
              3 => 'tax_class',
              4 => 'qty_in_stock',
              5 => 'category_name',
              6 => 'manufacturer_name',
              7 => 'mft_part_num',
              8 => 'vendor_part_num',
              9 => 
              array (
                'name' => 'alt_vendor_part_num_c',
                'label' => 'LBL_ALT_VENDOR_PART_NUM_C',
              ),
              10 => 'weight',
              11 => 
              array (
                'name' => 'weight_shipping_c',
                'label' => 'LBL_WEIGHT_SHIPPING',
              ),
              12 => 
              array (
                'name' => 'dimensions_c',
                'label' => 'LBL_DIMENSIONS',
              ),
              13 => 
              array (
                'name' => 'dimensions_shipping_c',
                'label' => 'LBL_DIMENSIONS_SHIPPING',
              ),
              14 => 
              array (
                'name' => 'dimensions_metric_c',
                'label' => 'LBL_DIMENSIONS_METRIC',
              ),
              15 => 
              array (
                'name' => 'dimensions_metric_shipping_c',
                'label' => 'LBL_DIMENSIONS_METRIC_SHIPPING',
              ),
              16 => 
              array (
                'name' => 'weight_kg_c',
                'label' => 'LBL_WEIGHT_KG',
              ),
              17 => 
              array (
              ),
              18 => 'type_name',
              19 => 
              array (
                'name' => 'cost_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'cost_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              20 => 'cost_usdollar',
              21 => 'date_cost_price',
              22 => 
              array (
                'name' => 'discount_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'discount_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              23 => 'discount_usdollar',
              24 => 
              array (
                'name' => 'list_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'list_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              25 => 'list_usdollar',
              26 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'registered_price_c',
                'label' => 'LBL_REGISTERED_PRICE',
              ),
              27 => 
              array (
              ),
              28 => 
              array (
                'name' => 'pricing_formula',
                'related_fields' => 
                array (
                  0 => 'pricing_factor',
                ),
              ),
              29 => 
              array (
                'name' => 'pricing_factor',
                'comment' => 'Variable pricing factor depending on pricing_formula',
                'related_fields' => 
                array (
                  0 => 'pricing_formula',
                ),
                'label' => 'LBL_PRICING_FACTOR',
              ),
              30 => 
              array (
                'name' => 'landing_factor_c',
                'label' => 'LBL_LANDING_FACTOR',
              ),
              31 => 
              array (
                'name' => 'unit_c',
                'label' => 'LBL_UNIT',
              ),
              32 => 
              array (
                'name' => 'warrantee_period_c',
                'label' => 'LBL_WARRANTEE_PERIOD',
              ),
              33 => 
              array (
                'name' => 'warrantee_details_c',
                'studio' => 'visible',
                'label' => 'LBL_WARRANTEE_DETAILS',
              ),
              34 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              35 => 'support_name',
              36 => 'support_description',
              37 => 'support_contact',
              38 => 'support_term',
              39 => 
              array (
                'name' => 'tag',
                'span' => 12,
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
