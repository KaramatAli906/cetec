<?php
 // created: 2018-09-03 10:27:44
$dictionary['Product']['fields']['commission_des_c']['duplicate_merge_dom_value']=0;
$dictionary['Product']['fields']['commission_des_c']['labelValue']='Commission Des';
$dictionary['Product']['fields']['commission_des_c']['calculated']='true';
$dictionary['Product']['fields']['commission_des_c']['formula']='ifElse(equal($commission_select_c,1),multiply($total_amount_des_c,divide($commission_c,100)),$commission_c)';
$dictionary['Product']['fields']['commission_des_c']['enforced']='true';
$dictionary['Product']['fields']['commission_des_c']['dependency']='';

 ?>