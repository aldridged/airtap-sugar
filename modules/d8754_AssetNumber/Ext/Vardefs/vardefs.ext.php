<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-06-06 10:32:26
$dictionary["d8754_AssetNumber"]["fields"]["d8754_assetnumber_documents_1"] = array (
  'name' => 'd8754_assetnumber_documents_1',
  'type' => 'link',
  'relationship' => 'd8754_assetnumber_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_D8754_ASSETNUMBER_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2014-06-06 10:20:41
$dictionary["d8754_AssetNumber"]["fields"]["d8754_assetnumber_d8754_assetsubassembly"] = array (
  'name' => 'd8754_assetnumber_d8754_assetsubassembly',
  'type' => 'link',
  'relationship' => 'd8754_assetnumber_d8754_assetsubassembly',
  'source' => 'non-db',
  'module' => 'd8754_AssetSubAssembly',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_D8754_ASSETNUMBER_D8754_ASSETSUBASSEMBLY_FROM_D8754_ASSETSUBASSEMBLY_TITLE',
);


// created: 2014-06-06 10:20:41
$dictionary["d8754_AssetNumber"]["fields"]["d8754_assettype_d8754_assetnumber"] = array (
  'name' => 'd8754_assettype_d8754_assetnumber',
  'type' => 'link',
  'relationship' => 'd8754_assettype_d8754_assetnumber',
  'source' => 'non-db',
  'module' => 'd8754_AssetType',
  'bean_name' => false,
  'vname' => 'LBL_D8754_ASSETTYPE_D8754_ASSETNUMBER_FROM_D8754_ASSETTYPE_TITLE',
  'id_name' => 'd8754_assettype_d8754_assetnumberd8754_assettype_ida',
);
$dictionary["d8754_AssetNumber"]["fields"]["d8754_assettype_d8754_assetnumber_name"] = array (
  'name' => 'd8754_assettype_d8754_assetnumber_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_D8754_ASSETTYPE_D8754_ASSETNUMBER_FROM_D8754_ASSETTYPE_TITLE',
  'save' => true,
  'id_name' => 'd8754_assettype_d8754_assetnumberd8754_assettype_ida',
  'link' => 'd8754_assettype_d8754_assetnumber',
  'table' => 'd8754_assettype',
  'module' => 'd8754_AssetType',
  'rname' => 'name',
);
$dictionary["d8754_AssetNumber"]["fields"]["d8754_assettype_d8754_assetnumberd8754_assettype_ida"] = array (
  'name' => 'd8754_assettype_d8754_assetnumberd8754_assettype_ida',
  'type' => 'link',
  'relationship' => 'd8754_assettype_d8754_assetnumber',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_D8754_ASSETTYPE_D8754_ASSETNUMBER_FROM_D8754_ASSETNUMBER_TITLE',
);


// created: 2014-06-13 11:37:18
$dictionary["d8754_AssetNumber"]["fields"]["d8754_assetnumber_d8753_rentalitem_1"] = array (
  'name' => 'd8754_assetnumber_d8753_rentalitem_1',
  'type' => 'link',
  'relationship' => 'd8754_assetnumber_d8753_rentalitem_1',
  'source' => 'non-db',
  'module' => 'd8753_rentalitem',
  'bean_name' => 'd8753_rentalitem',
  'side' => 'right',
  'vname' => 'LBL_D8754_ASSETNUMBER_D8753_RENTALITEM_1_FROM_D8753_RENTALITEM_TITLE',
);

?>