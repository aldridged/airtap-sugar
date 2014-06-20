<?php
$popupMeta = array (
    'moduleMain' => 'd8753_rentalitem',
    'varName' => 'd8753_rentalitem',
    'orderBy' => 'd8753_rentalitem.name',
    'whereClauses' => array (
  'd8754_assettype_d8753_rentalitem_1_name' => 'd8753_rentalitem.d8754_assettype_d8753_rentalitem_1_name',
  'd8754_assetnumber_d8753_rentalitem_1_name' => 'd8753_rentalitem.d8754_assetnumber_d8753_rentalitem_1_name',
  'status' => 'd8753_rentalitem.status',
),
    'searchInputs' => array (
  3 => 'status',
  4 => 'd8754_assettype_d8753_rentalitem_1_name',
  5 => 'd8754_assetnumber_d8753_rentalitem_1_name',
),
    'searchdefs' => array (
  'd8754_assettype_d8753_rentalitem_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_D8754_ASSETTYPE_D8753_RENTALITEM_1_FROM_D8754_ASSETTYPE_TITLE',
    'id' => 'D8754_ASSETTYPE_D8753_RENTALITEM_1D8754_ASSETTYPE_IDA',
    'width' => '10%',
    'name' => 'd8754_assettype_d8753_rentalitem_1_name',
  ),
  'd8754_assetnumber_d8753_rentalitem_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_D8754_ASSETNUMBER_D8753_RENTALITEM_1_FROM_D8754_ASSETNUMBER_TITLE',
    'id' => 'D8754_ASSETNUMBER_D8753_RENTALITEM_1D8754_ASSETNUMBER_IDA',
    'width' => '10%',
    'name' => 'd8754_assetnumber_d8753_rentalitem_1_name',
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
  'D8754_ASSETTYPE_D8753_RENTALITEM_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_D8754_ASSETTYPE_D8753_RENTALITEM_1_FROM_D8754_ASSETTYPE_TITLE',
    'id' => 'D8754_ASSETTYPE_D8753_RENTALITEM_1D8754_ASSETTYPE_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'd8754_assettype_d8753_rentalitem_1_name',
  ),
  'D8754_ASSETNUMBER_D8753_RENTALITEM_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_D8754_ASSETNUMBER_D8753_RENTALITEM_1_FROM_D8754_ASSETNUMBER_TITLE',
    'id' => 'D8754_ASSETNUMBER_D8753_RENTALITEM_1D8754_ASSETNUMBER_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'd8754_assetnumber_d8753_rentalitem_1_name',
  ),
  'RATE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_RATE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'rate',
  ),
  'STARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
    'name' => 'startdate',
  ),
  'STOPDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STOPDATE',
    'width' => '10%',
    'default' => true,
    'name' => 'stopdate',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'TAXABLE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_TAXABLE',
    'width' => '10%',
    'name' => 'taxable',
  ),
),
);
