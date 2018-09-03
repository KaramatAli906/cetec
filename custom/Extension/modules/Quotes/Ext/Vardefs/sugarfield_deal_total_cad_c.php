<?php
 // created: 2018-08-28 11:04:14
$dictionary['Quote']['fields']['deal_total_cad_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['deal_total_cad_c']['labelValue']='Discounted Subtotal (CAD Items)';
$dictionary['Quote']['fields']['deal_total_cad_c']['calculated']='1';
$dictionary['Quote']['fields']['deal_total_cad_c']['formula']='subtract(rollupSum($product_bundles,"deal_total_cad_c"),multiply(rollupSum($product_bundles,"deal_total_cad_c"),
divide($discount_percent_c,100)))';
$dictionary['Quote']['fields']['deal_total_cad_c']['enforced']='1';
$dictionary['Quote']['fields']['deal_total_cad_c']['dependency']='';
$dictionary['Quote']['fields']['deal_total_cad_c']['default']=0;

 ?>