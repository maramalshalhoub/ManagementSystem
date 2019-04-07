<?php
	  	include 'config.php';

      	if(isset($_POST['submit']))
	  	{
	  			//clean user input...
	  			$id = trim($_POST['id']);
                $id = strip_tags($id);
                $id = htmlspecialchars($id);
        

	  			$password = trim($_POST['password']);
	  			$password = strip_tags($password);
	  			$password = htmlspecialchars($password);

	  			$sql = "SELECT ID, password FROM users WHERE id = '$id'";
	  			$result = mysqli_query($con, $sql);
	  			$row = mysqli_fetch_array($result);
	  			$count = mysqli_num_rows($result); //if there is row, returns 1

	  			if($count == 1 && $row["password"] == $password)
	  			{
	  				$_SESSION['user'] = $row['ID'];
	  				echo "Login successful. You will be redirected in a few...";
	  				header( "refresh:3;url=homepagegrid.html" );
	  			}//end if
	  			else
	  			{
	  				echo "Incorrect ID or password. Please try again.";
	  			}//end else
	  	}//end if
?>
