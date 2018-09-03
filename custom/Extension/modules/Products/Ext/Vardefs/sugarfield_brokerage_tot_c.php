<?php
 // created: 2018-09-03 10:27:44
$dictionary['Product']['fields']['brokerage_tot_c']['duplicate_merge_dom_value']=0;
$dictionary['Product']['fields']['brokerage_tot_c']['labelValue']='Brokerage Total';
$dictionary['Product']['fields']['brokerage_tot_c']['calculated']='true';
$dictionary['Product']['fields']['brokerage_tot_c']['formula']='currencyMultiply(currencyMultiply($discount_price,$quantity),currencyDivide($brokerage_c,100))';
$dictionary['Product']['fields']['brokerage_tot_c']['enforced']='true';
$dictionary['Product']['fields']['brokerage_tot_c']['dependency']='';
$dictionary['Product']['fields']['brokerage_tot_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>