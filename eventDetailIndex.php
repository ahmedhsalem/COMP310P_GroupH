<?php 
      //get the id of the website which is the event_id 
      $rowid = $_GET['id'];
      
      //query of selecting image, event_id from requested_events 
      $result = mysqli_query($connection, "SELECT image, event_id FROM requested_event ORDER BY event_id DESC LIMIT 1");
      $row = mysqli_fetch_array($result);
      
      //query of selecting data from requested_events which are approved
      $query1=("SELECT * FROM requested_event WHERE approved = '1'");
      $result1=mysqli_query($connection, $query1);
      
      //query of selecting data from from requested_events 
      $query2=("SELECT * FROM requested_event WHERE requested_event.event_id = $rowid");
      $result2 = mysqli_query($connection, $query2);
      $row2 = mysqli_fetch_array($result2);
      $totalTicket = $row2['event_capacity'];
      $ticketPrice = $row2['ticket_price'];
      $startDate = $row2['event_start_date_time'];
      $endDate = $row2['event_end_date_time'];
      $eventDescription = $row2['description'];
      $eventName = $row2['event_name'];
      $ticketEndTime = $row2['ticket_end_date_time'];
      $ticketStartTime = $row2['ticket_start_date_time'];
      $image = $row2['image'];
      
      //query of selecting data from category
      $query6=("SELECT * FROM category 
                JOIN requested_event ON requested_event.category_id=category.category_id
                WHERE requested_event.event_id = $rowid"
                );
      $result6=mysqli_query($connection, $query6);
      $row6 = mysqli_fetch_array($result6);
      $eventCategory = $row6['category_name']; 
      
      //query of selecting the tumber of tickets from ticket
      $query3=("SELECT COUNT(*) as total FROM ticket WHERE event_id = $rowid");
      $result3 = mysqli_query($connection, $query3);
      $row3 = mysqli_fetch_array($result3);
      $soldTicket = $row3['total'];
      
      //query of selecting data from feedback 
      $query4=("SELECT feedback.* FROM feedback 
                JOIN ticket ON feedback.ticket_id=ticket.ticket_id
                JOIN requested_event ON requested_event.event_id = ticket.event_id
                WHERE requested_event.event_id = $rowid");
      $result4 = mysqli_query($connection, $query4);
      
      //query of selecting data from user 
      $query5=("SELECT * FROM user 
                JOIN ticket ON ticket.user_id=user.user_id
                JOIN feedback ON feedback.ticket_id = ticket.ticket_id
                JOIN requested_event ON requested_event.event_id=ticket.event_id
                WHERE requested_event.event_id = $rowid");
      $result5 = mysqli_query($connection, $query5);
      
      //query of selecting location_name from location 
      $query7=("SELECT * FROM location 
                JOIN requested_event ON requested_event.location_id = location.location_id
                WHERE requested_event.event_id = $rowid");
      $result7 = mysqli_query($connection, $query7);
      $row7 = mysqli_fetch_array($result7);
      $eventLocation = $row7['location_name'];
      
      ?>