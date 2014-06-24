<?php
//custom/modules/d8754_AssetNumber/logic_hooks/AssetNumberHooks.php

class AssetNumberHooks{
    
        function process_record_hook(&$bean, $event, $arguments){
          $bean->d8754_assetnumber_notice_c = '';
          $full_copy = new d8754_AssetNumber();
          $full_copy->retrieve($bean->id);
          $linked_rentalitems = $full_copy->get_linked_beans('d8754_assetnumber_d8753_rentalitem_1','d8753_rentalitem');
          if(count($linked_rentalitems)>=1) {
            $bean->d8754_assetnumber_notice_c = '&nbsp;<span title="Linked to more than one Rental Item" style="color:#FF0000;">&#x26A0;</span>';
                };
        }
}
?>

