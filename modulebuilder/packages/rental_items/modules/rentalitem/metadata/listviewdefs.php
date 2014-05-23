<?php
$module_name = 'd8753_rentalitem';
$listViewDefs [$module_name] = 
array (
  'PRODUCTNAME' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCTNAME',
    'width' => '10%',
    'default' => true,
  ),
  'SERIALNUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERIALNUMBER',
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
