<?php
// custom/modules/Project/views/view.detail.php - hide Activities, Project Tasks, Tasks
// dta 1/19/15 - Reenable activities subpanel

    if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    //Points to 'modules/Accounts/views/view.detail.php' instead of 'include/MVC/View/views/view.detail.php' since accounts already overrides the stock view
    //require_once('include/MVC/View/views/view.detail.php');
    require_once('modules/Project/views/view.detail.php');
   
    class CustomProjectViewDetail extends ProjectViewDetail
    {
   
        function CustomProjectViewDetail()
        {
            parent::ProjectViewDetail();
        }
   
        /**
         * Override - Called from process(). This method will display subpanels.
         */
        protected function _displaySubPanels()
        {
            if (isset($this->bean) && !empty($this->bean->id) && (file_exists('modules/' . $this->module . '/metadata/subpaneldefs.php') || file_exists('custom/modules/' . $this->module . '/metadata/subpaneldefs.php') || file_exists('custom/modules/' . $this->module . '/Ext/Layoutdefs/layoutdefs.ext.php'))) {
                $GLOBALS['focus'] = $this->bean;
                require_once ('include/SubPanel/SubPanelTiles.php');
                $subpanel = new SubPanelTiles($this->bean, $this->module);
   
                    //Subpanels to hide
                    $hideSubpanels=array(
                        'projecttask',
                        'tasks'
                    );
   
                    foreach ($hideSubpanels as $subpanelKey)
                    {
                        //Remove subpanel if set
                        if (isset($subpanel->subpanel_definitions->layout_defs['subpanel_setup'][$subpanelKey]))
                        {
                            unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup'][$subpanelKey]);
                        }
                    }
   
                echo $subpanel->display();
            }
        }
    }

?>
