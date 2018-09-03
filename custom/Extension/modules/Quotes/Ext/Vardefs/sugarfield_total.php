<?php
 // created: 2018-07-24 14:23:22
$dictionary['Quote']['fields']['total']['formula']='currencyAdd(rollupCurrencySum($product_bundles,"new_sub"),ifElse(isNumeric($tax),$tax,"0"),ifElse(isNumeric($shipping),$shipping,"0"),ifElse(isNumeric($deal_brokerage_c),$deal_brokerage_c,"0"))';
