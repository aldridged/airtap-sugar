<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$focus = new Task();
if (!isset($prefix)) $prefix='';

global $timedate;
$time_format = $timedate->get_user_time_format();
$time_separator = ":";
if(preg_match('/\d+([^\d])\d+([^\d]*)/s', $time_format, $match)) {
   $time_separator = $match[1];
}

if(!empty($_POST[$prefix.'due_meridiem'])) {
	$_POST[$prefix.'time_due'] = $timedate->merge_time_meridiem($_POST[$prefix.'time_due'],$timedate->get_time_format(), $_POST[$prefix.'due_meridiem']);
}

if(!empty($_POST[$prefix.'start_meridiem'])) {
	$_POST[$prefix.'time_start'] = $timedate->merge_time_meridiem($_POST[$prefix.'time_start'],$timedate->get_time_format(), $_POST[$prefix.'start_meridiem']);
}

if(isset($_POST[$prefix.'time_due']) && !empty($_POST[$prefix.'time_due'])) {
   $_POST[$prefix.'date_due'] = $_POST[$prefix.'date_due'] . ' ' . $_POST[$prefix.'time_due'];
}

if(isset($_POST[$prefix.'time_start']) && !empty($_POST[$prefix.'time_start'])) {
   $_POST[$prefix.'date_start'] = $_POST[$prefix.'date_start'] . ' ' . $_POST[$prefix.'time_start'];
}

require_once('include/formbase.php');
$focus = populateFromPost('', $focus);
if(!$focus->ACLAccess('Save')){
		ACLController::displayNoAccess(true);
		sugar_cleanup(true);
}

if (isCloseAndCreateNewPressed()) $focus->status = 'Completed';
if (!isset($_POST['date_due_flag'])) $focus->date_due_flag = 0;
if (!isset($_POST['date_start_flag'])) $focus->date_start_flag = 0;
if($focus->date_due_flag != 'off' && $focus->date_due_flag != 1) {
   $focus->date_due = '';
   $focus->time_due = '';
}

//if only the time is passed in, without a date, then string length will be 7
if (isset($_REQUEST['date_due']) && strlen(trim($_REQUEST['date_due']))<8 ){
    //no date set, so clear out field, and set the rest flag to true
    $focus->date_due_flag = 1;
    $focus->date_due = '';    
}

//if only the time is passed in, without a date, then string length will be 7
if (isset($_REQUEST['date_start']) && strlen(trim($_REQUEST['date_start']))<8){
    //no date set, so clear out field, and set the rest flag to true
    $focus->date_start_flag = 1;
    $focus->date_start = '';
}

if ((!empty($_REQUEST['relate_id']) && !empty($_REQUEST['parent_id'])) && ($_REQUEST['relate_id'] != $_REQUEST['parent_id']))
{
	$_REQUEST['relate_id'] = false;
}

// avoid undefined index
if (!isset($GLOBALS['check_notify'])) {
	$GLOBALS['check_notify'] = false;
}

// Get Admin variables
$admin = new Administration();
$admin->retrieveSettings();

// Save without standard email notification
$focus->save(false);
//$return_id = $focus->id;

// Get user to notify
$notify_user = new User();
$notify_user->retrieve($focus->assigned_user_id);

// Set assigned user name
if((!isset($focus->new_assigned_user_name))||(empty($focus->new_assigned_user_name))) {
  $focus->new_assigned_user_name = $notify_user->full_name;
  };

// Create content for notification email
$mailcontent = $focus->create_notification_email($notify_user);

// Create draft email in the email module
$emailObj = new Email();
$emailObj->to_addrs = $notify_user->emailAddress->getPrimaryAddress($notify_user);
$emailObj->to_addrs_names = $notify_user->emailAddress->getPrimaryAddress($notify_user);
$emailObj->to_addrs_ids = $notify_user->id;
$emailObj->cc_addrs = array("support@airtap.com");
$emailObj->cc_addrs_names = array("support@airtap.com");
$emailObj->cc_addrs_emails = array("blah");
$emailObj->cc_addrs_ids = '1';
$emailObj->type = 'draft';
$emailObj->deleted = '0';
$emailObj->name = $mailcontent->Subject;
$emailObj->description = $mailcontent->Body;
$emailObj->description_html = nl2br($mailcontent->Body);
$emailObj->from_addr = $admin->settings['notify_fromaddress'];
$emailObj->parent_type = "Tasks";
$emailObj->parent_id = $focus->id;
$emailObj->parent_name = $focus->name;
$emailObj->assigned_user_id = '1';
$emailObj->modified_user_id = '1';
$emailObj->created_by = '1';
$emailObj->status = 'draft';
$emailObj->save();

// Set return id
$return_id = $emailObj->id;

// Go to Mail
header("Location: index.php?module=Emails&action=Compose&replyForward=true&record=$return_id");
//header("Location: index.php?module=Emails&action=EmailUI&to_pdf=true&emailUIAction=getSingleMessageFromSugar&mbox=sugar::Emails&uid=$return_id");
//header("Location: index.php?action=EditView&type=out&module=Emails&record=$return_id");
exit();

if(!empty($_POST['is_ajax_call']))
{
	$json = getJSONobj();
	echo $json->encode(array('status' => 'success', 'get' => ''));
	exit;
}

handleRedirect($return_id,'Email');
?>
