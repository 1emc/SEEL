<?php
	
class Settings {
		
		//***		Site Settings 	***//
		
		public static $st_title = "Service Einsatzleitung";
		public static $st_url = "http://intraweb/SE/seel/";
		public static $st_style = "http://intraweb/conf/style.css";
		
		//***		User Settings 	***//
		
		public static $admin_name = "admin";
		public static $admin_pass = "Password1";
		
		//***		Database Settings 	***//
		
    public static $db_host = "172.20.2.249";
    public static $db_name = "Intraweb_Something";
		public static $db_user = "user";
		public static $db_pass = "pass";
}

function loadHeaderInformation($pg_title,$pg_description) {
		echo "
<!DOCTYPE html>
<html>
	<head>
		<title>".Settings::$st_title." - ".$pg_title."</title>
		<meta charset=\"UTF-8\" />
		<meta name=\"description\" content=\"".$pg_description."\" />
		<link href=\"".Settings::$st_style."\" type=\"text/css\" rel=\"stylesheet\" />
	</head>
	<body>";
}


	
?>
