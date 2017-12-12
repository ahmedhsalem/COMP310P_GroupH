<?php
require_once 'dbconnect.php';
require_once 'testinput.php';

$action = $_REQUEST['action']; 

//Requesting image and placing it in folder
if(isset($action) && $action =='add'){
    $file = $_FILES ['image']; 
    $name1 = $file ['name']; //Original name of file on client's machine
    $type = $file ['type']; //the file’s MIME-type
    $tmppath = $file ['tmp_name']; //name of the designated temporary file
    $extension = explode("/", $file ['type']); //creates array: for ex: image[0],jpeg[1] 
    $iname = rand().time().".".$extension[1];
if($name1!="") 
{ 
	if(move_uploaded_file ($tmppath, '../tester/images'. $iname))//images is the folder where images will be saved (Change opera_house for name of your project)
	{} 
} 

//requesting category check list info
$checkbox1 = $_REQUEST['category_check_list'];
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
   
//requesting & setting date info 
$new_date_from = $_REQUEST['event_start_date_time'];
//$new_date_from = date('Y-M-DTh:m', strtotime($_POST['event_start_date_time']));
$new_date_to = $_REQUEST['event_end_date_time'];
//date('Y-M-DTh:m', strtotime($_POST['event_end_date_time']));
$current_date = date('Y-m-d H:i');
//set ticket_end_date_time, 1 day before event starts
$last_sale_date = $new_date_from;
$last_sale_date = strtotime(date('Y-m-d H:i') . ' -1 day');


//ROOM ??
$sql = "INSERT INTO 'requested_event' ('event_id','description', 'event_name', 'category_check_list', 'event_capacity', 'ticket_price', 'user_id', 'event_start_date_time', 'event_end_date_time', 'ticket_start_date_time', 'ticket_end_date_time', 'room_id', 'approved', 'image') 
  VALUES (NULL,'".$_REQUEST['description']."','".$_REQUEST['event_name']."','".$chk."', '".$_REQUEST['event_capacity']."', '".$_REQUEST['ticket_price']."', 5,'".$new_date_from."','".$new_date_to."', '".$current_date."' ,'".$last_sale_date."' ,3 ,0,'".$iname."')"; 
    
  if(mysqli_query($connection, $sql)){	 
	 	  echo '<script type="text/javascript">window.location.href="home_page.php?msg=suc"</script>';
    }else{	
		   echo '<script type="text/javascript">window.location.href="home_page.php?msg=fail"</script>';
	}
       
}
?>
