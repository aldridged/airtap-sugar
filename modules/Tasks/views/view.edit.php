<?php
// Location custom/modules/Tasks/views/view.edit.php
// Tasks inherit jobnumer from case
require_once('include/MVC/View/views/view.edit.php');

class TasksViewEdit extends ViewEdit{

  function TasksViewEdit() {
    parent::SugarView();
  }

  function display(){
    $this->ev->process();
    echo "<!-- \n";
    var_dump($_REQUEST);
    echo "-->";
    if (empty($this->ev->focus->id) && ($_REQUEST['return_module'] == 'Cases')) {
          $parent = new aCase();
      $parent->retrieve($_REQUEST['return_id']);
          if((isset($parent->jobnumber_c))&&($this->ev->fieldDefs['jobnumber_c']['value']=="")) { $this->ev->fieldDefs['jobnumber_c']['value'] = $parent->jobnumber_c; }; 
    }
    echo $this->ev->display();
    }
}
?>


