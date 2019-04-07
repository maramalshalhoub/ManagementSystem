<?php

//to configure the connection to the database

	$host = "localhost";
    $dbUserName = "root";
    $password = "";
    $database = "eventManagement";

    $con = mysqli_connect($host, $dbUserName, $password, $database);

    if(!$con)
    {
        die("Failed to connect to database: ". mysqli_connect_error());
    }//end if
?>