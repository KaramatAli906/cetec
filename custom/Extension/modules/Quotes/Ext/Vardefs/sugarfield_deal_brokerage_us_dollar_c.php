<?php
 // created: 2018-09-03 10:27:45
$dictionary['Quote']['fields']['deal_brokerage_us_dollar_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['deal_brokerage_us_dollar_c']['labelValue']='Brokerage (US Dollar)';
$dictionary['Quote']['fields']['deal_brokerage_us_dollar_c']['calculated']='true';
$dictionary['Quote']['fields']['deal_brokerage_us_dollar_c']['formula']='ifElse(isNumeric(toString($brokerage_c)),currencyDivide(number($brokerage_c),number($base_rate)),"")';
$dictionary['Quote']['fields']['deal_brokerage_us_dollar_c']['enforced']='true';
$dictionary['Quote']['fields']['deal_brokerage_us_dollar_c']['dependency']='';

 ?>