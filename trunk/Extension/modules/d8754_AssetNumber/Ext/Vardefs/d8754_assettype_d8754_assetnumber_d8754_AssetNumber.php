<?php
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
