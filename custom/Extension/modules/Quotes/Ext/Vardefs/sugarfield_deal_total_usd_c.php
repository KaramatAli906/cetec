<?php
 // created: 2018-08-20 07:21:30
$dictionary['Quote']['fields']['deal_total_usd_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['deal_total_usd_c']['labelValue']='Discounted Subtotal (USD Items)';
$dictionary['Quote']['fields']['deal_total_usd_c']['calculated']='true';
$dictionary['Quote']['fields']['deal_total_usd_c']['formula']='subtract(rollupSum($product_bundles,"deal_total_usd_c"),multiply(rollupSum($product_bundles,"deal_total_usd_c"),
divide($discount_percent_c,100)))';
$dictionary['Quote']['fields']['deal_total_usd_c']['enforced']='true';
$dictionary['Quote']['fields']['deal_total_usd_c']['dependency']='';

 ?>