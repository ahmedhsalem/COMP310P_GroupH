<?php 
	include '../include/config.php';
	//include '../includes/functions.php';
	 $action =  $_REQUEST['action'];
if(isset($action) && $action =='output'){  
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];    
    $sql    = "SELECT * from  `admin` where username='".$username."' and  password=MD5('".$password."')";
 	$rs     = mysql_query($sql);
    $cheak  = mysql_num_rows($rs);	
	if($cheak <= 0){ 		
		echo '<script type="text/javascript">window.location.href="../index.php?msg=fail";</script>';	
		}else{
		$row = mysql_fetch_array($rs);
		extract($row);
		$_SESSION['userId'] = $id; 
		$_SESSION['usrname'] = $username; 
		$_SESSION['name'] = $name;
		$_SESSION['image'] = $image;
		$_SESSION['type'] = $type;			 	 			
		//header("Location: ../dashboard.php");
		echo '<script type="text/javascript">window.location.href="../dashboard.php";</script>';
	}
}
?>
