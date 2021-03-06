<?php
include_once 'session.php';

	$with_any_one_of = "";
	$search_in = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		
		
		
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("with_any_one_of");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "with_any_one_of":
						$with_any_one_of = $v;
						$wordsAry = explode(" ", $v);
						$wordsCount = count($wordsAry);
						for($i=0;$i<$wordsCount;$i++) {
							if(!empty($_POST["search"]["search_in"])) {
								$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $wordsAry[$i] . "%'";
							} else {
								$queryCondition .= "description LIKE '%" . $wordsAry[$i] . "%' OR event_name LIKE '%" . $wordsAry[$i] . "%' OR category.category_name LIKE '%" . $wordsAry[$i] . "%'";
							}
							if($i!=$wordsCount-1) {
								$queryCondition .= " OR ";
							}
						}
						break;
					
					case "search_in":
						$search_in = $_POST["search"]["search_in"];
						break;
						
					
							
						
					}
				}
			}
		}
	
	$orderby = " ORDER BY id DESC"; 
	$sql = "SELECT requested_event.event_name, requested_event.description, requested_event.category_id, category.category_name
FROM requested_event
LEFT JOIN category ON requested_event.category_id=category.category_id" . $queryCondition;
	$result = mysqli_query($connection,$sql);

?>
	
<html>
<head>
  <event_name>Search for Events</event_name>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <link href="searchevent.css" rel="stylesheet" type="text/css"/>
 
	
  </head>
  <body>
	<div id="wrapper">
	<div id="banner">
	<a href="home_page.php">
	<img src="logo.png"
	width="20%" height="70px"
	align="left"></a> 
	</div>
	<div id="menuTop">
		<header id="page_header">
			<nav>
				<ul>
					<li><a href="home_page.php" class="links">Home</a>
					<li><a href="eventList.php" class="links">Event List</a>
                                        <li><a href="search_event_page.php" class="links">Search Event</a>
					<li><a href="request_event_page.php" class="links">Request an Event</a>
                                        <?php if($userid_session == null) { ?>
                                                
                                        <li><a href="administrator.php" class="links">Administrator</a>
                                           
                                            
                                        <?php } ?>
                                        
                                        
				</ul>
			</nav>
		</header>
		
	</div>
	<div id="columnRight">
	Welcome, <?php echo " $welcomeName"; ?> </br>
	<a href="myEvent.php">My Events</a></br>
	<a href="settings_page.php">Settings</a></br>
	<a href="logout.php"><button type="button">Logout</button></a>
	</div>
	<div id="content">
	<div class="innercontent">
	
	
	
	
	
	 <div>      
			<form name="frmSearch" method="post" action="search_event_page.php">
			<input type="hidden" id="advance_search_submit" name="advance_search_submit" value="<?php echo $advance_search_submit; ?>">
			<div class="search-box">
				
				
				
				<h2>Search for Events:</h2>
				<div>
					
					
				
					
					
					<label class="search-label">Use Keywords and filters to find the event you're looking for:</label>
					
					
					
					<br />
					<br />
					<div style="float:left">
						<select name="search[search_in]" id="search_in" class="demoInputBox">
							<option value="">Filters</option>
							<option value="event_name" <?php if($search_in=="event_name") { echo "selected"; } ?>>Name of Event</option>
							<option value="description" <?php if($search_in=="description") { echo "selected"; } ?>>Description</option>
							<option value="category_id" <?php if($search_in=="category_id") { echo "selected"; } ?>>Category</option>
						</select>
					</div>
					
					<br />
					<br />
					<input type="text" name="search[with_any_one_of]" id="with_any_one_of" class="demoInputBox" value="<?php echo $with_any_one_of; ?>"	/>
	
				</div>
				
				<br />	
				
				<div>
					<input type="submit" name="go" class="btnSearch" value="Search">
				</div>
			</div>
			</form>	
			<?php while($row = mysqli_fetch_assoc($result)) { ?>
			<div>
				<div><strong><?php echo $row["event_name"]; ?></strong></div>
				<div class="result-description"><?php echo $row["description"]; ?></div>
				<div class="result-description">Category: <?php echo $row["category_name"]; ?></div>
				<br /> 
			</div>
			<?php } ?>
		</div>
		
		
		
			
<script type="text/javascript" src = "checker.js"></script>
</body>
</html>
