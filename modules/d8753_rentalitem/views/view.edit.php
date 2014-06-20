<?php
// Location custom/modules/d8753_rentalitem/views/view.edit.php
require_once('include/MVC/View/views/view.edit.php');

class d8753_rentalitemViewEdit extends ViewEdit{

  function d8753_rentalitemViewEdit() {
    parent::SugarView();
  }

  function display(){
    $this->ev->process();
    echo "<!-- \n";
	//echo "REQUEST\n";
    //var_dump($_REQUEST);
	echo "\nFIELD DEFS\n";
	var_dump($this->ev->fieldDefs);
    echo "-->";
	if(!empty($this->ev->fieldDefs['d8754_assetnumber_d8753_rentalitem_1d8754_assetnumber_ida']['value'])) {
	  $asset_number = new d8754_AssetNumber();
	  $asset_type = new d8754_AssetType();
	  $asset_number->retrieve($this->ev->fieldDefs['d8754_assetnumber_d8753_rentalitem_1d8754_assetnumber_ida']['value']);
	  $linked_types = $asset_number->get_linked_beans('d8754_assettype_d8754_assetnumber','d8754_AssetType');
	  foreach($linked_types as $cur_type) { $asset_type = $cur_type; };
	  $this->ev->fieldDefs['d8754_assettype_d8753_rentalitem_1d8754_assettype_ida']['value'] = $asset_type->id;
	  $this->ev->fieldDefs['d8754_assettype_d8753_rentalitem_1_name']['value'] = $asset_type->name;
	  };
    echo $this->ev->display();
    }
}
?>