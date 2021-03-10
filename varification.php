<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){    //function to check the sql injection
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: LO_IN.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: LO_IN.php?error=Password is required");
	    exit();
	}else{
		
		$sql = "SELECT * FROM `login` WHERE `username`='$uname' AND `password`='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
							$_SESSION['powers'] = $row['powers'];
							$_SESSION['image'] = $row['image'];
            	header("Location: home1.php?");
		        exit();
            }else{
				header("Location: LO_IN.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: LO_IN.php?error=Incorect User ");
	        exit();
		}
	}
	
}else{
	header("Location: LO_IN.php");

	exit();
}