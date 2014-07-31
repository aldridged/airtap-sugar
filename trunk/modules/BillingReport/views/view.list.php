<?php
require_once('include/MVC/View/views/view.list.php');
require_once('custom/include/phpexcel/PHPExcel.php');

class BillingReportViewList extends SugarView{
	function compareBeanNames($beanA,$beanB) 
	{
    return strcmp ($beanA->name,$beanB->name);
	}  
	
    public function display()
    {
		// Create search fields
		if(isset($_GET['start_date'])) { $start_date_val = $_GET['start_date']; }
		else { $start_date_val = ""; };
		if(isset($_GET['stop_date'])) { $stop_date_val = $_GET['stop_date']; }
		else { $stop_date_val = ""; };
		if(isset($_GET['acct_name'])) { $acct_name_val = $_GET['acct_name']; }
		else { $acct_name_val = ""; };
		if(isset($_GET['download'])) { $download = 1; }
		else { $download = 0;}
		
		//If its a download then prep the sheet
		if($download==1) {
		  $excelreport = new PHPExcel();

		  $excelreport->getProperties()->setCreator("Airtap LLC")
                            ->setLastModifiedBy("Reporting Service")
                            ->setTitle("Billing Report")
                            ->setSubject("Billing Report")
                            ->setDescription("Billing Report")
                            ->setKeywords("Billing,Report")
                            ->setCategory("Report");
							
		  $excelreport->setActiveSheetIndex(0)
                        ->setCellValue('A1', 'Account')
                        ->setCellValue('B1', 'JobNumber')
                        ->setCellValue('C1', 'JobName')
						->setCellValue('D1', 'Facility')
						->setCellValue('E1', 'Description')
                        ->setCellValue('F1', 'Well')
                        ->setCellValue('G1', 'AFE')
                        ->setCellValue('H1', 'OCSGState')
						->setCellValue('I1', 'JobStartDate')
                        ->setCellValue('J1', 'JobEndDate')
						->setCellValue('K1', 'JobStatus')
						->setCellValue('L1', 'AssetType')
						->setCellValue('M1', 'AssetNumber')
						->setCellValue('N1', 'RentalItemRate')
						->setCellValue('O1', 'RentalTerm')
						->setCellValue('P1', 'RentalItemStartDate')
						->setCellValue('Q1', 'RentalItemTaxable')
						->setCellValue('R1', 'RentalItemStatus')
						->setCellValue('S1', 'RentalItemStopDate');
                       
		  $excelreport->getActiveSheet()->setTitle('Billing Report');
		  
		  //Set to write from line 2
		  $i = 2;
		  };
		
		global $timedate;
		$cal_dateformat = $timedate->get_cal_date_format();
		$jscalendarImage = SugarThemeRegistry::current()->getImageURL('jscalendar.gif');
		$str_start = <<<EOHTML
<input onblur="parseDate(this, '{$cal_dateformat}');" class="text" name="start_date" size='12' maxlength='10' id='start_date' value='$start_date_val'>
<!--not_in_theme!--><img src="$jscalendarImage" alt="Enter Start Date" id="start_date_trigger" align="absmiddle">
<script type="text/javascript">
Calendar.setup ({
    inputField : "start_date", ifFormat : "{$cal_dateformat}", showsTime : false, button : "start_date_trigger", singleClick : true, step : 1, weekNumbers:false
});
</script>
EOHTML;
		$str_stop = <<<EOHTML
<input onblur="parseDate(this, '{$cal_dateformat}');" class="text" name="stop_date" size='12' maxlength='10' id='stop_date' value='$stop_date_val'>
<!--not_in_theme!--><img src="$jscalendarImage" alt="Enter Start Date" id="stop_date_trigger" align="absmiddle">
<script type="text/javascript">
Calendar.setup ({
    inputField : "stop_date", ifFormat : "{$cal_dateformat}", showsTime : false, button : "stop_date_trigger", singleClick : true, step : 1, weekNumbers:false
});
</script>
EOHTML;
		$str_act = "<input type='text' size='20' value='$acct_name_val' name='acct_name'>";
		echo "<form action='index.php?module=BillingReport' method='GET'>";
		echo "<input type=hidden name='module' value='BillingReport'>";
		echo "Start Date: ".$str_start." &nbsp; Stop Date:".$str_stop." &nbsp; Account:".$str_act." &nbsp; <input type=submit value='Generate' name=generate>";
		echo "&nbsp; <input type=submit value='Download' name=download>";
		echo "</form>";
		echo "<hr/>";
		
		// Output section
        echo '<pre>';
		echo "Account\n\tJobNumber,JobName,Facility,Description,Well,AFE,OCSGState,EstStartDate,EstEndDate,JobStatus\n\t\tAssetType,AssetNumber,RentalItemRate,RentalItemTerm,RentalItemStartDate,RentalItemTaxable,RentalItemStatus,RentalItemStopDate\n";
		
		//Retrieve Billing Accounts
        $oacct = new Account();
        $blaccts = $oacct->get_full_list();
		//Sort them
		usort($blaccts,array('BillingReportViewList','compareBeanNames'));

		//Loop over accounts skipping those that do not match if acct name specified 
		foreach($blaccts as $curacct) {
			if($curacct->deleted==1) { continue; };
			if($acct_name_val!="") {
			  if(substr($curacct->name,0,strlen($acct_name_val))!=$acct_name_val) {
			    continue;
				};
			  };
			$blprojs = $curacct->get_linked_beans('project','Project');
			usort($blprojs,array('BillingReportViewList','compareBeanNames'));
			$curacct->custom_fields->retrieve();
			echo $curacct->name."\n";
			//if(count($blprojs)==0) echo "\t!! NO JOBS !!\n";
			$outproj = "";
			$records = 0;
  
			//Loop over projects (by account)
			foreach($blprojs as $curproj) {
				if($curproj->deleted==1) { continue; };
				
				//Filter Jobs on time period
				$startdateunix = strtotime($start_date_val);
				$stopdateunix = strtotime($stop_date_val);
				$projstartdateunix = strtotime($curproj->estimated_start_date);
				$projstopdateunix = strtotime($curproj->estimated_stop_date);
					
				//Item start date beyond the timeframe we are looking at
				if(($projstartdateunix!=FALSE)&&($stopdateunix!=FALSE)) {
				  if($projstartdateunix>$stopdateunix) {
				    continue;
					};
				  };
					  
				//Item stop date before the timeframe we are looking at
				if(($projstopdateunix!=FALSE)&&($startdateunix!=FALSE)) {
				  if($projstopdateunix<$startdateunix) {
				    continue;
					};
				  };
					  
				$blri = $curproj->get_linked_beans('d8753_rentalitem_project','d8753_rentalitem');
				$curproj->custom_fields->retrieve();
				$outproj .= "\t".$curproj->jobnumber_c.",";
				$outproj .= '"'.$curproj->name.'",';
				$outproj .= '"'.$curproj->facility_c.'",';
				$outproj .= '"'.str_replace("\r\n",";",$curproj->description).'",';
				$outproj .= '"'.$curproj->well_c.'",';
				$outproj .= '"'.$curproj->afe_c.'",';
				$outproj .= '"'.$curproj->ocsgstate_c.'",';
				$outproj .= $curproj->estimated_start_date.",";
				$outproj .= $curproj->estimated_end_date.",";
				$outproj .= $curproj->status."\n";
				
				//if(count($blri)==0) echo "\t\t!! NO RENTAL ITEMS !!\n";
				
				$outri = "";
	
				//Loop over rental items (by project) skipping those whose stop date is before the specified start date or whose start date is after the specified stop date
				foreach($blri as $curri) {
					if($curri->deleted==1) { continue; };
										
					$blat = $curri->get_linked_beans('d8754_assettype_d8753_rentalitem_1','d8754_AssetType');
					$blan = $curri->get_linked_beans('d8754_assetnumber_d8753_rentalitem_1','d8754_AssetNumber');
					
					$outri .= "\t\t".'"'.$blat[0]->name.'",';
					$outri .= '"'.$blan[0]->name.'",';
					$outri .= $curri->rate.",";
					$outri .= $curri->term.",";
					$outri .= $curri->startdate.",";
					$outri .= $curri->taxable.",";
					$outri .= $curri->status.",";
					$outri .= $curri->stopdate;
					$outri .= "\n";
					
					//If this is a download add a row
					if($download==1) {
					  $excelreport->getActiveSheet()->setCellValue("A".$i,$curacct->name)
                                ->setCellValue("B".$i,$curproj->jobnumber_c)
								->setCellValue("C".$i,$curproj->name)
								->setCellValue("D".$i,$curproj->facility_c)
								->setCellValue("E".$i,str_replace("\r\n",";",$curproj->description))
								->setCellValue("F".$i,$curproj->well_c)
								->setCellValue("G".$i,$curproj->afe_c)
								->setCellValue("H".$i,$curproj->ocsgstate_c)
								->setCellValue("I".$i,$curproj->estimated_start_date)
								->setCellValue("J".$i,$curproj->estimated_end_date)
								->setCellValue("K".$i,$curproj->status)
								->setCellValue("L".$i,$blat[0]->name)
								->setCellValue("M".$i,$blan[0]->name)
								->setCellValue("N".$i,$curri->rate)
								->setCellValue("O".$i,$curri->term)
								->setCellValue("P".$i,$curri->startdate)
								->setCellValue("Q".$i,$curri->taxable)
								->setCellValue("R".$i,$curri->status)
								->setCellValue("S".$i,$curri->stopdate);
					  $i++;
					  };
					};
				if($outri=="") { $outproj = ""; };
				if($outproj!="") { $outri .= "\n"; $records = 1;};
				echo $outproj;
				echo $outri;
				$outproj = "";
				};
			if($records==0) { echo "NO RECORDS RETURNED\n\n"; };
			};
		echo '</pre>';
		
		// Bump out download
		if($download==1) {
		  $excelreport->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
		  $excelreport->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);

		  // Set Formatting on Sheet
		  $excelreport->getActiveSheet()->getStyle('A1:S1')->getFont()->setBold(true);
		  $excelreport->getActiveSheet()->getStyle('A1:S1')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);

		  // Write it out to the browser
		  $objWriter = PHPExcel_IOFactory::createWriter($excelreport, 'Excel5');
		  ob_clean();
		  header('Content-type: application/vnd.ms-excel');
		  header('Content-Disposition: attachment; filename="billing.xls"');
		  $objWriter->save('php://output');
		  };
	}
}    