<?php
      require_once('session.php');
      require ('search_event.php');
      require_once "initialise.php";
?>
<!DOCTYPE html>
	
<head>
  <event_name>Search for Events</event_name>
  <link href="layout.css" rel="stylesheet" type="text/css"/>


  <style>
      .entry, textarea, select {
    	float: right;
    	width: 500px;
    	resize: none;
    	padding: 1px;
    	margin-right: 200px;
    }
    .label {
    float: left;
  
}
.checkbox-grid li {
    display: block;
    float: left;
    width: 25%;
}
#content {
height: 700px;
}
  </style>
  
 
	
  </head>
  <body>

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
						<!--Filter search box -->
						<select name="search[search_in]" id="search_in" class="demoInputBox">
							<option value="">Filters</option>
							<option value="event_name" <?php if($search_in=="event_name") { echo "selected"; } ?>>Name of Event</option>
							<option value="description" <?php if($search_in=="description") { echo "selected"; } ?>>Description</option>
							<option value="category_name" <?php if($search_in=="category_name") { echo "selected"; } ?>>Category</option>
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
		 	<!--Shows results -->
			<div>
				
				<?php $id=$row['event_id'];
				echo '<a href="eventDetail.php?id=' . $id . '">';?>
				<div><strong><?php echo $row["event_name"]; ?></strong></div>
				</a>				
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