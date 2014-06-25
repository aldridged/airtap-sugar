<?php
//custom/modules/Project/logic_hooks.php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    1,
    'autonumber',
    'custom/modules/Project/logic_hooks/ProjectHooks.php',
    'ProjectHooks',
    'before_save_hook'
);
?>

