<?php
// created: 2014-05-22 22:21:04
$dictionary["d8753_rentalitem_project"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'd8753_rentalitem_project' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'd8753_rentalitem',
      'rhs_table' => 'd8753_rentalitem',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'd8753_rentalitem_project_c',
      'join_key_lhs' => 'd8753_rentalitem_projectproject_ida',
      'join_key_rhs' => 'd8753_rentalitem_projectd8753_rentalitem_idb',
    ),
  ),
  'table' => 'd8753_rentalitem_project_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'd8753_rentalitem_projectproject_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'd8753_rentalitem_projectd8753_rentalitem_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'd8753_rentalitem_projectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'd8753_rentalitem_project_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'd8753_rentalitem_projectproject_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'd8753_rentalitem_project_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'd8753_rentalitem_projectd8753_rentalitem_idb',
      ),
    ),
  ),
);