<?php
 // created: 2018-09-03 10:27:45
$dictionary['ProductBundle']['fields']['deal_total_cad_c']['duplicate_merge_dom_value']=0;
$dictionary['ProductBundle']['fields']['deal_total_cad_c']['labelValue']='Brokerage (CAD Items)';
$dictionary['ProductBundle']['fields']['deal_total_cad_c']['calculated']='true';
$dictionary['ProductBundle']['fields']['deal_total_cad_c']['formula']='rollupConditionalSum($products, "total_amount_des_c", "currency_id", createList("0c31214c-956c-11e8-9b30-54bef731534d"))';
$dictionary['ProductBundle']['fields']['deal_total_cad_c']['enforced']='true';
$dictionary['ProductBundle']['fields']['deal_total_cad_c']['dependency']='';

 ?>