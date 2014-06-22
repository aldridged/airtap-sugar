<?php
//custom/modules/d8753_rentalitems/logic_hooks/rentalitemsHooks.php

class rentalitemsHooks{
    function after_save_hook(&$bean, $event, $arguments){
	  $asset_number = new d8754_AssetNumber();
	  $asset_type = new d8754_AssetType();
      $linked_assets = $bean->get_linked_beans('d8754_assetnumber_d8753_rentalitem_1','d8754_AssetNumber');
	  foreach($linked_assets as $cur_asset) { $asset_number = $cur_asset; };
	  if(!empty($asset_number->id)) {
	    $linked_types = $asset_number->get_linked_beans('d8754_assettype_d8754_assetnumber','d8754_AssetType');
		foreach($linked_types as $cur_type) { $asset_type = $cur_type; };
		if(!empty($asset_type->id)) {
		  $bean->load_relationship('d8754_assettype_d8753_rentalitem_1');
		  $bean->d8754_assettype_d8753_rentalitem_1->add($asset_type->id);
		  };
		};
    }
	
	function process_record_hook(&$bean, $event, $arguments){
	  $bean->rentalitem_notice_c = '';
	  $full_copy = new d8753_rentalitem();
	  $full_copy->retrieve($bean->id);
	  $linked_jobs = $full_copy->get_linked_beans('d8753_rentalitem_project','Project');
	  if(count($linked_jobs)>1) {
	    $bean->rentalitem_notice_c = '&lt;span title="Linked to more than one Job" style="color:#FF0000;"&gt;&#x26A0;&lt;/span&gt;';
		};
	}
}
?>