<?php
 // created: 2018-09-03 10:27:44
$dictionary['ProductBundle']['fields']['deal_brokerage_c']['duplicate_merge_dom_value']=0;
$dictionary['ProductBundle']['fields']['deal_brokerage_c']['labelValue']='Brokerage';
$dictionary['ProductBundle']['fields']['deal_brokerage_c']['calculated']='true';
$dictionary['ProductBundle']['fields']['deal_brokerage_c']['formula']='rollupCurrencySum($products,"brokerage_tot_c")';
$dictionary['ProductBundle']['fields']['deal_brokerage_c']['enforced']='true';
$dictionary['ProductBundle']['fields']['deal_brokerage_c']['dependency']='';
$dictionary['ProductBundle']['fields']['deal_brokerage_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>