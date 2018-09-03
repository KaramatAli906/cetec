<?php
 // created: 2018-09-03 10:27:45
$dictionary['Quote']['fields']['tax_usd_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['tax_usd_c']['labelValue']='Tax (USD Items)';
$dictionary['Quote']['fields']['tax_usd_c']['calculated']='true';
$dictionary['Quote']['fields']['tax_usd_c']['formula']='multiply(rollupSum($product_bundles, "deal_taxable_total_usd_c"), divide($taxrate_value, "100"))';
$dictionary['Quote']['fields']['tax_usd_c']['enforced']='true';
$dictionary['Quote']['fields']['tax_usd_c']['dependency']='';
$dictionary['Quote']['fields']['tax_usd_c']['related_fields']=array (
  0 => 'taxrate_value',
);

 ?>