<?php 
      //get the id of the website which is the event_id 
      $rowid = $_GET['id'];
      
      //query of selecting first_name, last_name, email from user
      $query4=("SELECT DISTINCT first_name, last_name, email FROM user
                JOIN ticket ON ticket.user_id = user.user_id
                JOIN requested_event ON requested_event.event_id = ticket.event_id
                WHERE requested_event.event_id = $rowid");
      $result4=mysqli_query($connection, $query4);
      
      //query of selecting total number of tickets from requested_event
      $query5=("SELECT * FROM requested_event WHERE requested_event.event_id = $rowid");
      $result5 = mysqli_query($connection, $query5);
      $row5 = mysqli_fetch_array($result5);
      $totalTicket = $row5['event_capacity'];
      
      //query of selecting number of tickets that are sold from ticket
      $query6=("SELECT COUNT(*) as total FROM ticket WHERE event_id = $rowid");
      $result6 = mysqli_query($connection, $query6);
      $row6 = mysqli_fetch_array($result6);
      $soldTicket = $row6['total'];
      
      //query of selecting eventname from requested_event
      $query7=("SELECT * FROM requested_event WHERE requested_event.event_id = $rowid");
      $result7 = mysqli_query($connection, $query7);
      $row7 = mysqli_fetch_array($result7);
      $eventname = $row7['event_name'];
      ?>