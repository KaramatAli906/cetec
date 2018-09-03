<?php
 // created: 2018-09-03 10:27:44
$dictionary['Product']['fields']['brokerage_tot_us_dollar_c']['duplicate_merge_dom_value']=0;
$dictionary['Product']['fields']['brokerage_tot_us_dollar_c']['labelValue']='Brokerage Total (US Dollar)';
$dictionary['Product']['fields']['brokerage_tot_us_dollar_c']['calculated']='true';
$dictionary['Product']['fields']['brokerage_tot_us_dollar_c']['formula']='ifElse(isNumeric(toString($brokerage_tot_c)),currencyDivide(number($brokerage_tot_c),number($base_rate)),"")';
$dictionary['Product']['fields']['brokerage_tot_us_dollar_c']['enforced']='true';
$dictionary['Product']['fields']['brokerage_tot_us_dollar_c']['dependency']='';

 ?>