<?php
 // created: 2018-09-03 10:27:45
$dictionary['Quote']['fields']['total_usd_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['total_usd_c']['labelValue']='Total (USD Items)';
$dictionary['Quote']['fields']['total_usd_c']['calculated']='true';
$dictionary['Quote']['fields']['total_usd_c']['formula']='add(ifElse(isNumeric($deal_total_usd_c),$deal_total_usd_c,"0"),ifElse(isNumeric($tax_usd_c),$tax_usd_c,"0"),ifElse(isNumeric($deal_brokerage_usd_c),$deal_brokerage_usd_c,"0"))';
$dictionary['Quote']['fields']['total_usd_c']['enforced']='true';
$dictionary['Quote']['fields']['total_usd_c']['dependency']='';
$dictionary['Quote']['fields']['total_usd_c']['related_fields']=array (
  0 => 'deal_total_usd_c',
  1 => 'tax_usd_c',
  2 => 'deal_brokerage_usd_c',
);

 ?>