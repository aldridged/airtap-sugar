<?php
// Location custom/modules/Cases/views/view.edit.php
// Cases inherit job number from Project
require_once('include/MVC/View/views/view.edit.php');

class CasesViewEdit extends ViewEdit{

  function CasesViewEdit() {
    parent::SugarView();
  }

  function display(){
    $this->ev->process();
    echo "<!-- \n";
    var_dump($_REQUEST);
    echo "-->";
    if (empty($this->ev->focus->id) && ($_REQUEST['return_relationship'] == 'projects_cases')) {
                        $parent = new Project();
                        $parent->retrieve($_REQUEST['return_id']);
                        if((isset($parent->facility_c))&&($this->ev->fieldDefs['jobnumber_c']['value']=="")) { $this->ev->fieldDefs['jobnumber_c']['value'] = $parent->jobnumber_c; };  
                };
    echo $this->ev->display();
    }
}
?>
