<?php
$popupMeta = array (
    'moduleMain' => 'd8754_AssetNumber',
    'varName' => 'd8754_AssetNumber',
    'orderBy' => 'd8754_assetnumber.name',
    'whereClauses' => array (
  'name' => 'd8754_assetnumber.name',
  'status' => 'd8754_assetnumber.status',
  'd8754_assettype_d8754_assetnumber_name' => 'd8754_assetnumber.d8754_assettype_d8754_assetnumber_name',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'd8754_assettype_d8754_assetnumber_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'd8754_assettype_d8754_assetnumber_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_D8754_ASSETTYPE_D8754_ASSETNUMBER_FROM_D8754_ASSETTYPE_TITLE',
    'id' => 'D8754_ASSETTYPE_D8754_ASSETNUMBERD8754_ASSETTYPE_IDA',
    'width' => '10%',
    'name' => 'd8754_assettype_d8754_assetnumber_name',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
	'customCode' => '{$ASSETNUMBER_NOTICE_C}{$STATUS}',
  ),
  'D8754_ASSETTYPE_D8754_ASSETNUMBER_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_D8754_ASSETTYPE_D8754_ASSETNUMBER_FROM_D8754_ASSETTYPE_TITLE',
    'id' => 'D8754_ASSETTYPE_D8754_ASSETNUMBERD8754_ASSETTYPE_IDA',
    'width' => '10%',
    'default' => true,
  ),
),
);
