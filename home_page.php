<!DOCTYPE html>
<head>
  <title>Operahouse Project</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <?php include "session.php";?>
</head>
<style>
	.box {
		width:24.94%;
		height: 150px;
		background-color: white;
		float: left;
		border-right:1px solid black;
		border-bottom: 1px solid black;
}

	#rightbox {
		border: none;
}

</style>
<body>
	<div id="wrapper">
	<div id="banner">
	<img src="logo.png"
	width="20%" height="70px"
	align="left"> 
	<p align="center"> Title</p>
	</div>
	<div id="menuTop">
		<header id="page_header">
			<nav>
				<ul>
					<li><a href="index.html" class="links">Events</a>
					<li><a href="DVD_Rental_Page.html" class="links">Locations</a>
					<li><a href="DVD_Returns.html" class="links">Request an Event</a>
					<li><a href="DVD_Returns.html" class="links">Contact Us</a>
				</ul>
			</nav>
		</header>
		<input type="submit" value="Go" id="go"/>
		<input type="text" id="search" class="search"/>
		<label for="search" id="label">Search:</label>
	</div>
	<div id="columnRight">
	Welcome <?php echo " $login_session"; ?>
	</div>
	<div id="content">
	<div class="innercontent">
	</div>
	</div>
	<div class="box">
	</div>
	<div class="box">
	</div>
	<div class="box">
	</div>
	<div class="box" id="rightbox">
	</div>
	</div>
</body>
</html>