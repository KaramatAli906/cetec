<?php
 // created: 2018-09-03 10:27:45
$dictionary['Quote']['fields']['total_cad_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['total_cad_c']['labelValue']='Total (CAD Items)';
$dictionary['Quote']['fields']['total_cad_c']['calculated']='true';
$dictionary['Quote']['fields']['total_cad_c']['formula']='add(ifElse(isNumeric($deal_total_cad_c),$deal_total_cad_c,"0"),ifElse(isNumeric($tax_cad_c),$tax_cad_c,"0"),ifElse(isNumeric($deal_brokerage_cad_c),$deal_brokerage_cad_c,"0"))';
$dictionary['Quote']['fields']['total_cad_c']['enforced']='true';
$dictionary['Quote']['fields']['total_cad_c']['dependency']='';
$dictionary['Quote']['fields']['total_cad_c']['related_fields']=array (
  0 => 'deal_total_cad_c',
  1 => 'tax_cad_c',
  2 => 'deal_brokerage_cad_c',
);

 ?>