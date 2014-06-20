<?php
// created: 2014-06-13 12:14:48
$subpanel_layout['list_fields'] = array (
  'd8753_rentalitem_project_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_D8753_RENTALITEM_PROJECT_FROM_PROJECT_TITLE',
    'id' => 'D8753_RENTALITEM_PROJECTPROJECT_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Project',
    'target_record_key' => 'd8753_rentalitem_projectproject_ida',
  ),
  'startdate' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'stopdate' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_STOPDATE',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
);