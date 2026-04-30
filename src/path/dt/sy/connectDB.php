<?php
	/*
	#$connect = mysqli_connect("ls-6245b343f961f6cbde8b326e3c1e4755717cc7df.cyblewiweux4.eu-central-1.rds.amazonaws.com", "dbmasteruser", "123456zxc", "think", 3306);
	#$connect = mysqli_connect("localhost", "root", "root", "think");
	$connect = mysqli_connect("localhost", "root", "7HD+BM:c.pyn", "think");
	*/

	#Localhost
		if(strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
			$connect = mysqli_connect("localhost", "root", "root", "think");
		}
	#Real server
		else {
			$connect = mysqli_connect("localhost", "root", "7HD+BM:c.pyn", "think");
		}
?>