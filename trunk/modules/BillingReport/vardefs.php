<?php
$dictionary['BillingReport'] = array(
    'table'=>'BillingReport',
    'audited'=>false,
    'fields'=>array (
          //Your fielddefs here     
     )
);  

require_once('include/SugarObjects/VardefManager.php');
VardefManager::createVardef('BillingReport','BillingReport', array('basic'));
?>