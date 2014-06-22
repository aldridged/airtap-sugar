<?php
// created: 2014-05-22 22:21:04
$dictionary["d8753_rentalitem"]["fields"]["d8753_rentalitem_project"] = array (
  'name' => 'd8753_rentalitem_project',
  'type' => 'link',
  'relationship' => 'd8753_rentalitem_project',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_D8753_RENTALITEM_PROJECT_FROM_PROJECT_TITLE',
  'id_name' => 'd8753_rentalitem_projectproject_ida',
);
$dictionary["d8753_rentalitem"]["fields"]["d8753_rentalitem_project_name"] = array (
  'name' => 'd8753_rentalitem_project_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_D8753_RENTALITEM_PROJECT_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'd8753_rentalitem_projectproject_ida',
  'link' => 'd8753_rentalitem_project',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["d8753_rentalitem"]["fields"]["d8753_rentalitem_projectproject_ida"] = array (
  'name' => 'd8753_rentalitem_projectproject_ida',
  'type' => 'link',
  'relationship' => 'd8753_rentalitem_project',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_D8753_RENTALITEM_PROJECT_FROM_D8753_RENTALITEM_TITLE',
);
$dictionary["d8753_rentalitem"]["fields"]["d8753_rentalitem_notice_c"] = array (
  'name' => 'rentalitem_notice_c',
  'vname' => 'LBL_RENTALITEM_NOTICE_C',
  'type' => 'varchar',
  'len' => '255',
  'source' => 'non-db',
);