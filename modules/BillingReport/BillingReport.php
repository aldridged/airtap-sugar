<?php
class BillingReport extends Basic {
	var $new_schema = true;
	var $module_dir = 'BillingReport';
	var $object_name = 'BillingReport';
	var $table_name = 'BillingReport';
	var $importable = false;
	var $disable_row_level_security = true;
	
	function BillingReport(){	
		parent::Basic();
	}
	
	function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
    }
}
?>