<?php
      require_once('session.php');
      require_once ('hostingEventIndex.php');
      require_once 'initialise.php';

?>
<!DOCTYPE html>
<head>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
</head>
<style>
   
.title {
	font-size: 1.2em;
	font-weight: bold;
}
table, th, td {
    border: 1px solid black;
}
</style>

	<div id="content">
	<div class="innercontent">
            
            <div id="contentColumn">
                <?php
               
                if ($result4->num_rows > 0) {
                
                echo "<table><tr><th>Name</th><th>Email</th></tr>";
    // output data of each row
                while($row4 = $result4->fetch_assoc()) {
        
                    echo "<tr><td>" . $row4['first_name']."&nbsp".$row4['last_name']. "</td><td>" . $row4['email']. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
                    
            } 
                ?>
            </div>
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>