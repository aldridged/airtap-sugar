<?php
//custom/modules/d8753_rentalitems/logic_hooks.php

$hook_version = 1;
$hook_array = Array(); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(
    0,
    'fixAssetType',
    'custom/modules/d8753_rentalitem/logic_hooks/rentalitemsHooks.php',
    'rentalitemsHooks',
    'after_save_hook'
);
$hook_array['process_record'][] = Array(
    1,
    'checkJobs',
    'custom/modules/d8753_rentalitem/logic_hooks/rentalitemsHooks.php',
    'rentalitemsHooks',
    'process_record_hook'
);
?>