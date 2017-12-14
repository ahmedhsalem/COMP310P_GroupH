 <?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "opera_house");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_GET['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO requested_event (image) VALUES ('$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

?>