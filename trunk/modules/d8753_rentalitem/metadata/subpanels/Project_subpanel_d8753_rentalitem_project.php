<?php
// created: 2014-06-19 08:17:57
$subpanel_layout['list_fields'] = array (
  'd8754_assettype_d8753_rentalitem_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_D8754_ASSETTYPE_D8753_RENTALITEM_1_FROM_D8754_ASSETTYPE_TITLE',
    'id' => 'D8754_ASSETTYPE_D8753_RENTALITEM_1D8754_ASSETTYPE_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'd8754_AssetType',
    'target_record_key' => 'd8754_assettype_d8753_rentalitem_1d8754_assettype_ida',
  ),
  'd8754_assetnumber_d8753_rentalitem_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_D8754_ASSETNUMBER_D8753_RENTALITEM_1_FROM_D8754_ASSETNUMBER_TITLE',
    'id' => 'D8754_ASSETNUMBER_D8753_RENTALITEM_1D8754_ASSETNUMBER_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'd8754_AssetNumber',
    'target_record_key' => 'd8754_assetnumber_d8753_rentalitem_1d8754_assetnumber_ida',
  ),
  'rate' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_RATE',
    'currency_format' => true,
    'width' => '5%',
    'default' => true,
  ),
  'term' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TERM',
    'width' => '5%',
  ),
  'taxable' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_TAXABLE',
    'width' => '7%',
  ),
  'startdate' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_STARTDATE',
    'width' => '7%',
    'default' => true,
  ),
  'stopdate' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_STOPDATE',
    'width' => '7%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '7%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'd8753_rentalitem',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'width' => '5%',
    'vname' => 'LBL_REMOVE',
    'default' => true,
    'widget_class' => 'SubPanelRemoveButton',
  ),
);