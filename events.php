<?php
require 'dbconnect.php';
session_start();

$action = $_REQUEST['action'];   
if(isset($action) && $action =='add'){
    $file = $_FILES ['image']; 
    $name1 = $file ['name']; 
    $type = $file ['type']; 
    $tmppath = $file ['tmp_name']; 
    $extension = explode("/", $file ['type']);
    $iname = rand().time().".".$extension[1];
if($name1!="") 
{ 
	if(move_uploaded_file ($tmppath, '../images/opera_house/'. $iname))//images is the folder where images will be saved (Change opera_house for name of your project)
	{} 
} 
$checkbox1 = $_REQUEST['check_list'];
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
  $sql = "INSERT INTO 'requested_event' ('reservation_id',event_name','event_start_date_time','check_list','image','user_id') VALUES (NULL,'".$_REQUEST['name']."','".$_REQUEST['date']."','".$chk."','".$iname."','".$_SESSION['userId']."')"; 
    if(mysql_query($sql)){	 
	 	  echo '<script type="text/javascript">window.location.href="../heme_page.php?msg=suc"</script>';
    }else{	
		   echo '<script type="text/javascript">window.location.href="../home_page.php?msg=fail"</script>';
	}
       
}

?>
