<?php
$module_name = 'CETEC_Demos';
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
                'acl_module' => 'CETEC_Demos',
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
              0 => 
              array (
                'name' => 'cetec_demos_cetec_demo_products_name',
                'initial_filter' => 'available_only',
                'initial_filter_label' => 'LBL_FILTER_AVAILABLE_ONLY',
                'filter_populate' => 
                array (
                  'available_quantity' => '0',
                ),
                'populate_list' => 
                array (
                  'return_state' => 'return_state',
                ),
              ),
              1 => 
              array (
                'name' => 'cetec_demos_accounts_name',
              ),
              2 => 
              array (
                'name' => 'start_date',
                'label' => 'LBL_START_DATE',
              ),
              3 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE',
              ),
              4 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
                'name' => 'issue_location_c',
                'label' => 'LBL_ISSUE_LOCATION',
              ),
              7 => 
              array (
                'name' => 'return_location_c',
                'label' => 'LBL_RETURN_LOCATION',
              ),
              8 => 
              array (
                'name' => 'issuance_state',
                'studio' => 'visible',
                'label' => 'LBL_ISSUANCE_STATE',
              ),
              9 => 
              array (
                'name' => 'return_state',
                'studio' => 'visible',
                'label' => 'LBL_RETURN_STATE',
              ),
              10 => 
              array (
                'name' => 'expected_return_date_c',
                'label' => 'LBL_EXPECTED_RETURN_DATE',
              ),
              11 => 
              array (
                'name' => 'outbound_shipping_method_c',
                'label' => 'LBL_OUTBOUND_SHIPPING_METHOD',
              ),
              12 => 
              array (
                'name' => 'outbound_tracking_number_c',
                'label' => 'LBL_OUTBOUND_TRACKING_NUMBER',
              ),
              13 => 
              array (
                'name' => 'outbound_shipping_cost_c',
                'label' => 'LBL_OUTBOUND_SHIPPING_COST',
              ),
              14 => 
              array (
                'name' => 'return_shipping_method_c',
                'label' => 'LBL_RETURN_SHIPPING_METHOD',
              ),
              15 => 
              array (
                'name' => 'return_tracking_number_c',
                'label' => 'LBL_RETURN_TRACKING_NUMBER',
              ),
              16 => 
              array (
                'name' => 'return_shipping_cost_c',
                'label' => 'LBL_RETURN_SHIPPING_COST',
              ),
              17 => 
              array (
                'name' => 'deposit_c',
                'label' => 'LBL_DEPOSIT',
              ),
              18 => 'assigned_user_name',
              19 => 
              array (
                'name' => 'team_name',
              ),
              20 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
            ),
          ),
          2 => 
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
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 
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
              2 => 
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
