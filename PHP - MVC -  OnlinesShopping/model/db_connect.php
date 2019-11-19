<?php
    $host = "localhost";
	$username = "root";
	$pass = "";
    $db = "onlineshopping";
    //
    $connect = mysqli_connect($host, $username, $pass);
    mysqli_select_db($connect, $db);
    if(!$connect){
        die("Connection refused" . mysqli_error($connect));
    }
    //Connected to server ($host, $username, $password, $db)!
?>