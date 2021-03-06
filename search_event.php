<?php
	// adapted from: http://phppot.com/php/advanced-search-using-php/
	//setting variables - words searched for and where to search
	$with_any_one_of = "";
	$search_in = "";
	
	
	
	$queryCondition = "";
	
	//if user has typed and searched
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST["search"])) {
		
		
		//loop
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("with_any_one_of");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE (";
					}
				}
				//consider both word search and filters
				switch($k) {
					case "with_any_one_of":
						$with_any_one_of = $v;
						$wordsAry = explode(" ", $v);
						$wordsCount = count($wordsAry);
						for($i=0;$i<$wordsCount;$i++) {
							if(!empty($_POST["search"]["search_in"])) {
								$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $v . "%'";
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
						
					
							
						
					}}
				}
			}
		}
	
	//need to filter for only approved
	$orderby = " ORDER BY event_id DESC"; 
	$sql = "SELECT requested_event.event_name, requested_event.description, requested_event.event_id, category.category_name
FROM requested_event
LEFT JOIN category ON requested_event.category_id=category.category_id" . $queryCondition . ") AND requested_event.approved = '1'" . $orderby; 
	$result = mysqli_query($connection,$sql);
		
?>
