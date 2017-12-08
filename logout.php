<?php
session_start();
if (session_destroy()) {
	header("Location: opening_page.php");
	}
?>