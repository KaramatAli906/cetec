<?php
 // created: 2018-09-03 10:27:44
$dictionary['Product']['fields']['taxable_total_c']['duplicate_merge_dom_value']=0;
$dictionary['Product']['fields']['taxable_total_c']['labelValue']='Taxable Total';
$dictionary['Product']['fields']['taxable_total_c']['calculated']='true';
$dictionary['Product']['fields']['taxable_total_c']['formula']='ifElse(equal($tax_class,"Taxable"),$total_amount,0)';
$dictionary['Product']['fields']['taxable_total_c']['enforced']='true';
$dictionary['Product']['fields']['taxable_total_c']['dependency']='';
$dictionary['Product']['fields']['taxable_total_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
  2 => 'total_amount',
  3 => 'tax_class',
);

 ?>