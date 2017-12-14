<?php

      $query1=("SELECT * FROM requested_event WHERE approved = 0");
      $result1 = mysqli_query($connection, $query1);
      $row1 = mysqli_fetch_array($result1);
      $unapprovedEventName = $row1['event_name'];
      $unapprovedEventDescription = $row1['description'];
      $unapprovedTicketPrice = $row1['ticket_price'];
      $unapprovedEventStartDate = $row1['event_start_date_time'];
      $unapprovedEventEndDate = $row1['event)end_date_time'];

?>