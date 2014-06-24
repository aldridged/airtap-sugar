<?php
//custom/modules/d8754_AssetNumber/logic_hooks.php

$hook_version = 1;
$hook_array = Array();
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(
    1,
    'checkJobs',
    'custom/modules/d8754_AssetNumber/logic_hooks/AssetNumberHooks.php',
    'AssetNumberHooks',
    'process_record_hook'
);
?>
