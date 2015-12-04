<?php

	function get_connection() {
		$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=yyxia'; //Change dbname to yours
		$userid = 'yyxia'; //Change this to yours
		$password = 'Ravum2'; //Change this to yours

		try {
		    $db = new PDO($dsn, $userid, $password);
		}
		catch(PDOException $e) {
			echo "Error connecting to database";
	    }
	    	return $db;
	}
?>