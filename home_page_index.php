<?php

$query8=("SELECT * FROM requested_event WHERE approved='1' 
              AND requested_event.event_start_date_time > NOW() 
              ORDER BY event_start_date_time ASC 
              LIMIT 1 ");
      $result8 = mysqli_query($connection, $query8);
      $row8 = mysqli_fetch_array($result8);
      $eventNameBox1 = $row8['event_name'];
      $eventDescriptionBox1 = $row8['description'];
      $eventDateBox1 =$row8['event_start_date_time'];
      $image=$row8['image'];
      
      
          
      $query9=("SELECT * FROM requested_event 
              WHERE approved='1' 
              AND requested_event.event_start_date_time > '$eventDateBox1' 
              ORDER BY event_start_date_time ASC 
              LIMIT 1 ");
      $result9 = mysqli_query($connection, $query9);
      $row9 = mysqli_fetch_array($result9);
      $eventNameBox2 = $row9['event_name'];
      $eventDescriptionBox2 = $row9['description'];
      $eventDateBox2 =$row9['event_start_date_time'];
      
      $query10=("SELECT * FROM requested_event 
              WHERE approved='1' 
              AND requested_event.event_start_date_time > '$eventDateBox2' 
              ORDER BY event_start_date_time ASC 
              LIMIT 1 ");
      $result10 = mysqli_query($connection, $query10);
      $row10 = mysqli_fetch_array($result10);
      $eventNameBox3 = $row10['event_name'];
      $eventDescriptionBox3 = $row10['description'];
      $eventDateBox3 =$row10['event_start_date_time'];
      
      
?>