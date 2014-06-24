<?php
 // created: 2014-06-06 10:20:41
$layout_defs["d8754_AssetNumber"]["subpanel_setup"]['d8754_assetnumber_d8754_assetsubassembly'] = array (
  'order' => 100,
  'module' => 'd8754_AssetSubAssembly',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_D8754_ASSETNUMBER_D8754_ASSETSUBASSEMBLY_FROM_D8754_ASSETSUBASSEMBLY_TITLE',
  'get_subpanel_data' => 'd8754_assetnumber_d8754_assetsubassembly',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
