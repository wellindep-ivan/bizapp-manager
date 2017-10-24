<?php
	require("functions.php");

	// Database Configuration
	define("DB_USER",'wellerindependen');
	define("DB_PASSWORD",'QuFjC9FP');
	define("DB_HOST","mysql.wellerindependent.com");
	define("DB_NAME","wellerindependent_login");

	// Thumb Properties
	define("TB_WIDTH","100");
	define("TB_HEIGHT","73");

	// Debug
	define("DEBUG", false);

	// Error Log
	define("ERROR_LOG", "/tmp/slides-errorLog.log");

	// Config Zip and Image Compression
	define("IMAGE_COMPRESSION","90%");
	define("MASTERSLIDES_FILENAME","masterSlides.zip");
	define("MASTERSLIDES_PRENAME", "masterSlides");
	
	$globalTitle = "Admin Slides";
	//$globalHost = "http://localhost:8888/redmatapp/";
	//$basePath 	= "/Applications/MAMP/htdocs/redmatapp/";
	$globalHost = "http://www.redmatmedia.com/redmatapp/";
	$basePath 	= "/home/redmat/public_html/redmatapp/";
	
?>
