<?php
 // created: 2018-09-03 10:27:45
$dictionary['Quote']['fields']['deal_brokerage_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['deal_brokerage_c']['labelValue']='Brokerage';
$dictionary['Quote']['fields']['deal_brokerage_c']['calculated']='true';
$dictionary['Quote']['fields']['deal_brokerage_c']['formula']='rollupCurrencySum($product_bundles,"deal_brokerage_c")';
$dictionary['Quote']['fields']['deal_brokerage_c']['enforced']='true';
$dictionary['Quote']['fields']['deal_brokerage_c']['dependency']='';
$dictionary['Quote']['fields']['deal_brokerage_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>