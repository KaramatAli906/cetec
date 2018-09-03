<?php
 // created: 2018-09-03 10:27:45
$dictionary['ProductBundle']['fields']['deal_total_usd_c']['duplicate_merge_dom_value']=0;
$dictionary['ProductBundle']['fields']['deal_total_usd_c']['labelValue']='Brokerage (USD Items)';
$dictionary['ProductBundle']['fields']['deal_total_usd_c']['calculated']='true';
$dictionary['ProductBundle']['fields']['deal_total_usd_c']['formula']='rollupConditionalSum($products, "total_amount_des_c", "currency_id", createList("-99"))';
$dictionary['ProductBundle']['fields']['deal_total_usd_c']['enforced']='true';
$dictionary['ProductBundle']['fields']['deal_total_usd_c']['dependency']='';

 ?>