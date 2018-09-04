<?php

//to make visible manufacturer and product template to all users
if (($key = array_search('Manufacturers', $modInvisList)) !== false) {
    unset($modInvisList[$key]);
}
if (($key = array_search('ProductTemplates', $modInvisList)) !== false) {
    unset($modInvisList[$key]);
}
$moduleList[] = 'ProductTemplates';
$moduleList[] = 'Manufacturers';