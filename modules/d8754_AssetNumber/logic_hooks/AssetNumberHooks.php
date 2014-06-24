<?php
//custom/modules/d8754_AssetNumber/logic_hooks/AssetNumberHooks.php

class AssetNumberHooks{
    
        function process_record_hook(&$bean, $event, $arguments){
          $bean->d8754_assetnumber_notice_c = '';
          $full_copy = new d8754_AssetNumber();
          $full_copy->retrieve($bean->id);
          $linked_rentalitems = $full_copy->get_linked_beans('d8754_assetnumber_d8753_rentalitem_1','d8753_rentalitem');
          if(count($linked_rentalitems)>=1) {
		    foreach($linked_rentalitems as $ri) {
			  $projnames = '';
			  $riproj = $ri->get_linked_beans('d8753_rentalitem_project','Project');
			  if(count($riproj)>=1) {
				foreach($riproj as $lproj) {
				  $projnames .= $lproj->name.",";
			      };
				$projnames = substr($projnames,0,-1);
				};
			  if($ri->status == "Pending") {
                $bean->d8754_assetnumber_notice_c .= '&nbsp;<span title="Pending to rental items on job '.$projnames.'" style="color:#E6E600;">&#x2691;</span>';
				};
			  if($ri->status == "Active") {
			    $bean->d8754_assetnumber_notice_c .= '&nbsp;<span title="Active on rental items on job '.$projnames.'" style="color:#FF0000;">&#x26D4;</span>';
				};
			};
		  };
        }
}
?>

