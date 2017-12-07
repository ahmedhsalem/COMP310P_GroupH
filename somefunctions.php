<?php

function getUsersInfo($id){
	 $user = array();
  $sql="select * from users where id=".$id;
	 $rs = mysql_query($sql);
	 while($row = mysql_fetch_assoc($rs)){
		$user = $row;	
		}
	 return $user ;
}

function CheckEmail($email){
	 $sql="select * from  users where email='".$email."'";
	 $rs = mysql_query($sql);
	 return $rs ;
}

function CheckUserName($username){
	 $sql="select * from  users where user_name='".$username."'";
	 $rs = mysql_query($sql);
	 return $rs ;
   
   function getProviderBookings($pid){
	 $sql="select a.*,b.titel as service_name,b.description as service_description,b.image as service_image,b.cost as service_cost,b.address as service_address,b.lat,b.longitude,c.category_name,d.name as user_name,d.phone_no as user_phone,d.profile_pic as user_image from bookings as a LEFT JOIN services as b ON a.sid=b.sid LEFT JOIN categorys as c ON b.cid=c.id LEFT JOIN users as d ON a.uid=d.id where a.pid=".$pid." and a.status='1' order by a.booking_date desc"; 
	 $rs = mysql_query($sql);
	 while($row = mysql_fetch_assoc($rs)){
		$bookings[] = $row;	
		}
	 return $bookings ;
}

function getUserBookings($uid){
	 $sql="select a.*,b.titel as service_name,b.description as service_description,b.image as service_image,b.cost as service_cost,b.address as service_address,b.lat,b.longitude,c.category_name,d.name as provider_name,d.phone_no as provider_phone,d.profile_pic as provider_image from bookings as a LEFT JOIN services as b ON a.sid=b.sid LEFT JOIN categorys as c ON b.cid=c.id LEFT JOIN users as d ON a.pid=d.id where a.uid=".$uid." and a.status='1' order by a.booking_date desc";
	 $rs = mysql_query($sql);
	 while($row = mysql_fetch_assoc($rs)){
		$bookings[] = $row;	
		}
	 return $bookings ;
}

?> 
