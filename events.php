<?php
require 'dbconnect.php';
session_start();

$action = $_REQUEST['action']; //request all

//Requesting image and placing it in folder
if(isset($action) && $action =='add'){
    $file = $_FILES ['image']; 
    $name1 = $file ['event_name']; //stores the filename as event name
    $type = $file ['type']; //stores the file’s MIME-type
    $tmppath = $file ['tmp_name']; //stores the name of the designated temporary file
    $extension = explode("/", $file ['type']);
    $iname = rand().time().".".$extension[1];
if($name1!="") 
{ 
	if(move_uploaded_file ($tmppath, '../images/opera_house/'. $iname))//images is the folder where images will be saved (Change opera_house for name of your project)
	{} 
} 

//requesting category check list info
$checkbox1 = $_REQUEST['category_check_list'];
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
//requesting date info 
$new_date = date('Y-M-DTh:m', strtotime($_POST['dateFrom']));
echo $new_date;

//ROOM ??
  $sql = "INSERT INTO 'requested_event' ('reservation_id','description', 'event_name', 'category_check_list', 'event_capacity', 'ticket_price', 'user_id', 'event_start_date_time', 'event_end_date_time', 'approved', 'image') 
  VALUES (NULL,'".$_REQUEST['description']."','".$_REQUEST['event_name']."','".$chk."', '".$_REQUEST['event_capacity']."', '".$_REQUEST['ticket_price']."','".$_SESSION['userId']."','".$_REQUEST['date']."',0,'".$iname."')"; 
    
  if(mysql_query($sql)){	 
	 	  echo '<script type="text/javascript">window.location.href="../heme_page.php?msg=suc"</script>';
    }else{	
		   echo '<script type="text/javascript">window.location.href="../home_page.php?msg=fail"</script>';
	}
       
}

?>
