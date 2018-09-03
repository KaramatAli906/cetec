<?php
 // created: 2018-09-03 10:27:45
$dictionary['ProductBundle']['fields']['deal_brokerage_us_dollar_c']['duplicate_merge_dom_value']=0;
$dictionary['ProductBundle']['fields']['deal_brokerage_us_dollar_c']['labelValue']='Brokerage (US Dollar)';
$dictionary['ProductBundle']['fields']['deal_brokerage_us_dollar_c']['calculated']='true';
$dictionary['ProductBundle']['fields']['deal_brokerage_us_dollar_c']['formula']='ifElse(isNumeric(toString($brokerage_c)),currencyDivide(number($brokerage_c),number($base_rate)),"")';
$dictionary['ProductBundle']['fields']['deal_brokerage_us_dollar_c']['enforced']='true';
$dictionary['ProductBundle']['fields']['deal_brokerage_us_dollar_c']['dependency']='';

 ?>