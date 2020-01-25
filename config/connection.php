<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="princeton_university";
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	