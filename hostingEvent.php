<?php require_once('initialise.php'); 
      require_once('session.php');
      ob_start();
      require_once ('myEvent.php');
      ob_end_clean();
            
     $rowid = $_GET['id'];
      
      
      $query4=("SELECT DISTINCT first_name, last_name FROM user
                JOIN ticket ON ticket.user_id = user.user_id
                JOIN requested_event ON requested_event.event_id = ticket.event_id
                WHERE requested_event.event_id = $rowid");
      
      $result4=mysqli_query($connection, $query4);
//      $row1=mysqli_fetch_array($result1);
      
      $query5=("SELECT * FROM requested_event WHERE requested_event.event_id = $rowid");
      $result5 = mysqli_query($connection, $query5);
      $row5 = mysqli_fetch_array($result5);
      $totalTicket = $row5['event_capacity'];
      
      $query6=("SELECT COUNT(*) as total FROM ticket WHERE event_id = $rowid");
      $result6 = mysqli_query($connection, $query6);
      $row6 = mysqli_fetch_array($result6);
      $soldTicket = $row6['total'];
      
      $query7=("SELECT * FROM requested_event WHERE requested_event.event_id = $rowid");
      $result7 = mysqli_query($connection, $query7);
      $row7 = mysqli_fetch_array($result7);
      $eventname = $row7['event_name'];

?>

 <title>Hosting Event</title>


<style>
    #leftContentColumn {
        width:37.35%;
        height: 389px;
        border-style: solid;
        float: left;
        border-width: 0px 0px 1px 1px;
        float: top;
    }
    
    #rightContentColumn {
        width:37.35%;
        height: 389px;
        border-style: solid;
        float: right;
        border-width: 0px 0px 1px 1px;
        float: top;
    }
   
</style>


            <div id='columnHeading'>
                <h2><?php echo $eventname; ?></h2>
            </div>
          
            <div id='rightContentColumn'>
                <p1>Total Tickets:</p1>
                <?php echo $totalTicket; ?>
                <br><br><br><br><br><br><p2>Tickets Sold:</p2>
                <?php echo $soldTicket; ?>
                <br><br><br><br><br><br><p3>Tickets Available:</p3>
                <?php echo $totalTicket-$soldTicket; ?>
            </div>

            <div id="leftContentColumn">
                <p1>List of Participants:<br></p1>
                <?php 
                 
                    if ($result4->num_rows > 0) {
                        while($row4 = $result4->fetch_assoc()) {
                            echo $row4['first_name']."&nbsp".$row4['last_name']."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                
                ?>
                
                
              
            </div>
          
