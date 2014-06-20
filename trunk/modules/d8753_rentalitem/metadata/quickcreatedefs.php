<?php
$module_name = 'd8753_rentalitem';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'd8754_assettype_d8753_rentalitem_1_name',
            'label' => 'LBL_D8754_ASSETTYPE_D8753_RENTALITEM_1_FROM_D8754_ASSETTYPE_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'd8754_assetnumber_d8753_rentalitem_1_name',
            'label' => 'LBL_D8754_ASSETNUMBER_D8753_RENTALITEM_1_FROM_D8754_ASSETNUMBER_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'rate',
            'label' => 'LBL_RATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'term',
            'studio' => 'visible',
            'label' => 'LBL_TERM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'startdate',
            'label' => 'LBL_STARTDATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'stopdate',
            'label' => 'LBL_STOPDATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'taxable',
            'label' => 'LBL_TAXABLE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'd8753_rentalitem_project_name',
            'label' => 'LBL_D8753_RENTALITEM_PROJECT_FROM_PROJECT_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
