<?php
 // created: 2018-08-31 13:49:21
$dictionary['CETEC_Pricelist']['fields']['name']['unified_search']=false;
$dictionary['CETEC_Pricelist']['fields']['name']['calculated']='1';
$dictionary['CETEC_Pricelist']['fields']['name']['formula']='concat(related($productcategories_cetec_pricelist_1,"name")," - ",related($cetec_pricelist_accounts,"name"))';

 ?>