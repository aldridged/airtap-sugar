<?php
//custom/modules/Project/logic_hooks/ProjectHooks.php

class ProjectHooks{
   
        function before_save_hook(&$bean, $event, $arguments){
		  if(empty($bean->fetched_row['id'])) {
		    $sql = "SELECT MAX(jobnumber_c) FROM project_cstm;";
            $maxJobnumber = $GLOBALS['db']->getOne($sql);
            $maxJobnumber++;
			$bean->jobnumber_c = $maxJobnumber;
			};
		}

}
?>
