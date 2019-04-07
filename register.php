<?php

    include 'config.php';

    if(isset($_POST['submit']))
    {
	  	//cleaning user input...

	  	$name = trim($_POST['name']);
	  	$name = strip_tags($name);
	  	$name = htmlspecialchars($name);

        $id = trim($_POST['id']);
        $id = strip_tags($id);
        $id = htmlspecialchars($id);
        
        $level = trim($_POST['level']);
        $level = strip_tags($level);
        $level = htmlspecialchars($level);
        
        $password = trim($_POST['password']);
        $password = strip_tags($password);
        $password = htmlspecialchars($password);
        
        $checkPassword = trim($_POST['passwordCheck']);
        $checkPassword = strip_tags($checkPassword);
        $checkPassword = htmlspecialchars($checkPassword);
        
        if($password == $checkPassword)
        {
            $sql = "INSERT INTO users (id, name, level, password) VALUES ('$id', '$name', '$level', '$password')";
            $result = mysqli_query($con, $sql);
            echo "Sign up successful. You will be redirected in a moment...";
            header( "refresh:3;url=homepagegrid.html" );
        }
        else
        {
            echo "Passwords don't match. Please try again.";
        }
        
    }//end if
?>
