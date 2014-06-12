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
  'set_complete' => 
  array (
    'width' => '1',
    'label' => 'LBL_LIST_CLOSE',
    'default' => true,
    'sortable' => false,
  ),
  'name' => 
  array (
    'width' => '40',
    'label' => 'LBL_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'parent_name' => 
  array (
    'width' => '30',
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
  ),
  'priority' => 
  array (
    'width' => '10',
    'label' => 'LBL_PRIORITY',
    'default' => true,
  ),
  'status' => 
  array (
    'width' => '8',
    'label' => 'LBL_STATUS',
    'default' => true,
  ),
  'date_start' => 
  array (
    'width' => '15',
    'label' => 'LBL_START_DATE',
    'default' => true,
  ),
  'time_start' => 
  array (
    'width' => '15',
    'label' => 'LBL_START_TIME',
    'default' => false,
  ),
  'date_due' => 
  array (
    'width' => '15',
    'label' => 'LBL_DUE_DATE',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15',
    'label' => 'LBL_DATE_ENTERED',
  ),
  'date_modified' => 
  array (
    'width' => '15',
    'label' => 'LBL_DATE_MODIFIED',
  ),
  'created_by' => 
  array (
    'width' => '8',
    'label' => 'Created by',
    'sortable' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8',
    'label' => 'LBL_LIST_ASSIGNED_USER',
  ),
  'contact_name' => 
  array (
    'width' => '8',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'ACLTag' => 'CONTACT',
    'related_fields' => 
    array (
      0 => 'contact_id',
    ),
  ),
);
