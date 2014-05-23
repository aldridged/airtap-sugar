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
            'name' => 'productname',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCTNAME',
          ),
          1 => 
          array (
            'name' => 'serialnumber',
            'label' => 'LBL_SERIALNUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rate',
            'label' => 'LBL_RATE',
          ),
          1 => 
          array (
            'name' => 'term',
            'studio' => 'visible',
            'label' => 'LBL_TERM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'startdate',
            'label' => 'LBL_STARTDATE',
          ),
          1 => 
          array (
            'name' => 'stopdate',
            'label' => 'LBL_STOPDATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'taxable',
            'label' => 'LBL_TAXABLE',
          ),
          1 => '',
        ),
        4 => 
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
          0 => '',
        ),
      ),
    ),
  ),
);
?>
