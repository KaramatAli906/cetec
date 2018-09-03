<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$viewdefs['Quotes']['base']['view']['quote-data-grand-totals-footer'] = array(
    'panels' => array(
        array(
            'name' => 'panel_quote_data_grand_totals_footer',
            'label' => 'LBL_QUOTE_DATA_GRAND_TOTALS_FOOTER',
            'fields' => array(
                array(
                    'name' => 'deal_total_usd_c',
                    'type' => 'currency',
                    'label' => 'LBL_SUBTOTAL_USD',
                ),
                array(
                    'name' => 'tax_usd_c',
                    'type' => 'currency',
                    'label' => 'LBL_TAX_USD',
                ),
                array(
                    'name' => 'deal_brokerage_usd_c',
                    'type' => 'currency',
                    'label' => 'LBL_BROKERAGE_USD',
                ),
                array(
                    'name' => 'total_usd_c',
                    'type' => 'currency',
                    'label' => 'LBL_TOTAL_USD',
                    'css_class' => 'grand-total',
                ),
            ),
        ),
        array(
            'name' => 'panel_quote_data_grand_totals_footer',
            'label' => 'LBL_QUOTE_DATA_GRAND_TOTALS_FOOTER',
            'fields' => array(
                array(
                    'name' => 'deal_total_cad_c',
                    'type' => 'currency',
                    'label' => 'LBL_SUBTOTAL_CAD',
                ),
                array(
                    'name' => 'tax_cad_c',
                    'type' => 'currency',
                    'label' => 'LBL_TAX_CAD',
                ),
                array(
                    'name' => 'deal_brokerage_cad_c',
                    'type' => 'currency',
                    'label' => 'LBL_BROKERAGE_CAD',
                ),
                array(
                    'name' => 'total_cad_c',
                    'type' => 'currency',
                    'label' => 'LBL_TOTAL_CAD',
                    'css_class' => 'grand-total',
                ),
            ),
        ),
    ),
);
