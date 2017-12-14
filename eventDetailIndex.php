<?php 
      $rowid = $_GET['id'];
      
      
//      $query1=("SELECT category_name FROM category
//                JOIN requested_event ON ticket.user_id = user.user_id
//                JOIN requested_event ON requested_event.event_id = ticket.event_id
//                WHERE requested_event.event_id = $rowid");
//      
//      $result4=mysqli_query($connection, $query4);
      
      $query1=("SELECT * FROM requested_event WHERE approved = '1'");
      $result1=mysqli_query($connection, $query1);
      
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
      
      $query6=("SELECT * FROM category 
                JOIN requested_event ON requested_event.category_id=category.category_id
                WHERE requested_event.event_id = $rowid"
                );
      $result6=mysqli_query($connection, $query6);
      $row6 = mysqli_fetch_array($result6);
      $eventCategory = $row6['category_name']; 

      
      $query3=("SELECT COUNT(*) as total FROM ticket WHERE event_id = $rowid");
      $result3 = mysqli_query($connection, $query3);
      $row3 = mysqli_fetch_array($result3);
      $soldTicket = $row3['total'];
      
      $query4=("SELECT feedback.* FROM feedback 
                JOIN ticket ON feedback.ticket_id=ticket.ticket_id
                JOIN requested_event ON requested_event.event_id = ticket.event_id
                WHERE requested_event.event_id = $rowid");
      $result4 = mysqli_query($connection, $query4);
//      $row4 = mysqli_fetch_array($result4);
//      $reviewTitle = $row4['title_of_description'];
//      $reviewDescription = $row4['description'];
//      $rating= $row4['rating'];
            
      $query5=("SELECT * FROM user 
                JOIN ticket ON ticket.user_id=user.user_id
                JOIN feedback ON feedback.ticket_id = ticket.ticket_id
                JOIN requested_event ON requested_event.event_id=ticket.event_id
                WHERE requested_event.event_id = $rowid");
      $result5 = mysqli_query($connection, $query5);
//      $row5 = mysqli_fetch_array($result5);
//      $firstName = $row5['first_name'];
//      $lastName = $row5['last_name'];
      

      
//      $query3=("SELECT * FROM requested_event WHERE requested_event.event_id = $rowid");
//      $result3 = mysqli_query($connection, $query3);
//      $row3 = mysqli_fetch_array($result3);
//      $ticketPrice = $row3['ticket_price'];
      
//      $query4=("SELECT * FROM requested_event WHERE requested_event.event_id = $rowid");
//      $result4 = mysqli_query($connection, $query4);
//      $row4 = mysqli_fetch_array($result4);
//      $ticketPrice = $row4['event_start_date_time'];
      ?>