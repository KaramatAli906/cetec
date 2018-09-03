<?php
 // created: 2018-09-03 10:27:45
$dictionary['Quote']['fields']['tax_cad_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['tax_cad_c']['labelValue']='Tax (CAD Items)';
$dictionary['Quote']['fields']['tax_cad_c']['calculated']='true';
$dictionary['Quote']['fields']['tax_cad_c']['formula']='multiply(rollupSum($product_bundles, "deal_taxable_total_cad_c"), divide($taxrate_value, "100"))';
$dictionary['Quote']['fields']['tax_cad_c']['enforced']='true';
$dictionary['Quote']['fields']['tax_cad_c']['dependency']='';
$dictionary['Quote']['fields']['tax_cad_c']['related_fields']=array (
  0 => 'taxrate_value',
);

 ?>