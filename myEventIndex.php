<?php

$query1=("SELECT DISTINCT *, first_name FROM `requested_event`
      JOIN ticket ON requested_event.event_id = ticket.event_id
      JOIN user ON ticket.user_id=user.user_id
      WHERE user.user_id='$userid_session'
      AND requested_event.event_start_date_time < NOW()");
      $result1=mysqli_query($connection, $query1);
      
      //event attending
      $query2=("SELECT DISTINCT *, first_name FROM `requested_event`
      JOIN ticket ON requested_event.event_id = ticket.event_id
      JOIN user ON ticket.user_id=user.user_id
      WHERE user.user_id='$userid_session'
      AND requested_event.event_start_date_time > NOW()");
      $result2=mysqli_query($connection, $query2);
//      $row2=mysqli_fetch_array($result2);
      
      //event hosting
      $query3=("SELECT * FROM requested_event WHERE requested_event.user_id = '$userid_session'");
      $result3=mysqli_query($connection, $query3);

      
      if (mysqli_fetch_array($result1) > 0) {
                        while($row1 = mysqli_fetch_array($result1)) {
                            $attendedList = $row1['event_name']."<br>";
                        }
                    } else {
                        $attendedList = "0 results";
                    }
       
       if (mysqli_fetch_array($result2) > 0) {
                        while($row2 = mysqli_fetch_array($result2)) {
                            $attendingList = $row2['event_name']."<br>";
                        }
                    } else {
                        $attendingList = "0 results";
                    }
    
      
            
                
         
   ?>