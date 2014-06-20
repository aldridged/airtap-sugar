<?php
$module_name = 'd8753_rentalitem';
$listViewDefs [$module_name] = 
array (
  'D8754_ASSETTYPE_D8753_RENTALITEM_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_D8754_ASSETTYPE_D8753_RENTALITEM_1_FROM_D8754_ASSETTYPE_TITLE',
    'id' => 'D8754_ASSETTYPE_D8753_RENTALITEM_1D8754_ASSETTYPE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'D8754_ASSETNUMBER_D8753_RENTALITEM_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_D8754_ASSETNUMBER_D8753_RENTALITEM_1_FROM_D8754_ASSETNUMBER_TITLE',
    'id' => 'D8754_ASSETNUMBER_D8753_RENTALITEM_1D8754_ASSETNUMBER_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'RATE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_RATE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'STARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'STOPDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STOPDATE',
    'width' => '10%',
    'default' => true,
  ),
  'TAXABLE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_TAXABLE',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
?>
