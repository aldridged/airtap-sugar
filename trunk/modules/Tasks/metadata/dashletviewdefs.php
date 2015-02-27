<?php
$dashletData['TasksDashlet']['searchFields'] = array (
  'department_c' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
  'priority' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_start' => 
  array (
    'default' => '',
  ),
  'date_due' => 
  array (
    'default' => '',
  ),
);
$dashletData['TasksDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '35%',
    'label' => 'LBL_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'parent_name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_RELATED_TO',
    'sortable' => false,
    'dynamic_module' => 'PARENT_TYPE',
    'link' => true,
    'id' => 'PARENT_ID',
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'default' => true,
    'name' => 'parent_name',
  ),
  'priority' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIORITY',
    'default' => true,
    'name' => 'priority',
  ),
  'status' => 
  array (
    'width' => '8%',
    'label' => 'LBL_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'date_start' => 
  array (
    'width' => '10%',
    'label' => 'LBL_START_DATE',
    'default' => true,
    'name' => 'date_start',
  ),
  'date_due' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DUE_DATE',
    'default' => true,
    'name' => 'date_due',
  ),
  'set_complete' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_CLOSE',
    'default' => false,
    'sortable' => false,
    'name' => 'set_complete',
  ),
  'time_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_START_TIME',
    'default' => false,
    'name' => 'time_start',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'Created by',
    'sortable' => false,
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '12%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'contact_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'ACLTag' => 'CONTACT',
    'related_fields' => 
    array (
      0 => 'contact_id',
    ),
    'name' => 'contact_name',
    'default' => false,
  ),
);
