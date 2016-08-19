<?php 

  // Remove .php extension
	if (strpos($_SERVER['REQUEST_URI'],".php") !== false) {
		$newUri = str_replace(".php","",$_SERVER['REQUEST_URI']);
		header('Location: '.$newUri);
	}

session_start();
session_destroy();
header("Location: ./login.php");
?>
