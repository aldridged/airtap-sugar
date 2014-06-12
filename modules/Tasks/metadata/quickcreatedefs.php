<?php
$viewdefs ['Tasks'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
          1 => '<input type="hidden" name="is_ajax_call" value="1">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
          2 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" class="button" onclick="document.getElementById(\'status\').value=\'Completed\'; this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'; return check_form(\'EditView\');" type="submit" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),
        ),
      ),
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
        'LBL_TASK_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_task_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'jobnumber_c',
            'label' => 'LBL_JOBNUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'department_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTMENT',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'priority',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'status',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
          1 => 
          array (
            'name' => 'date_due',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'date_start',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
        ),
        7 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'rows' => 8,
              'cols' => 60,
            ),
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'worklog_c',
            'studio' => 'visible',
            'label' => 'LBL_WORKLOG',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'contactname_c',
            'label' => 'LBL_CONTACTNAME',
          ),
          1 => 
          array (
            'name' => 'dockheliportlocation_c',
            'label' => 'LBL_DOCKHELIPORTLOCATION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contactnumber_c',
            'label' => 'LBL_CONTACTNUMBER',
          ),
          1 => 
          array (
            'name' => 'vesselname_c',
            'label' => 'LBL_VESSELNAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'partssparesneeded_c',
            'studio' => 'visible',
            'label' => 'LBL_PARTSSPARESNEEDED',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
      ),
    ),
  ),
);
?>
