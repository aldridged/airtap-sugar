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
    //echo "<!-- \n";
    //var_dump($_REQUEST);
	//var_dump($this->ev->fieldDefs);
    //echo "-->";
    if (empty($this->ev->focus->id) && ($_REQUEST['return_relationship'] == 'projects_cases')) {
                        $parent = new Project();
                        $parent->retrieve($_REQUEST['return_id']);
						$accts = $parent->get_linked_beans('accounts','Account');
						$i=0;
						$acctlist = array();
						foreach($accts as $acct) {
						  $acctlist[i] = $acct->id;
						  $i++;
						  };
                        if((isset($parent->facility_c))&&($this->ev->fieldDefs['jobnumber_c']['value']=="")) { $this->ev->fieldDefs['jobnumber_c']['value'] = $parent->jobnumber_c; };
						if(($i>0)&&($this->ev->fieldDefs['account_id']['value']=="")) { $this->ev->fieldDefs['account_id']['value'] = $acct->id; $this->ev->fieldDefs['account_name']['value'] = $acct->name;};
                };
    echo $this->ev->display();
    }
}
?>
