<!DOCTYPE html>
<html>
<head>
	<title>تسجــــــيل الدخول</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="icon" href="img/U logo.png">

</head>
<body>
	<img class="wave" src="img/background.png">
	<div class="container">
		<div class="img">
			<img src="img/U logo.png" width="400" height="400">
		</div>
		<div class="login-content">
			<form action="varification.php" method="post">
				<img src="img/login.png" width="200" height="200"  >
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
									<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
           		   		<h5>Username</h5>
           		   		<input type="text" name="uname" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" required>
            	   </div>
            	</div>
            	<a href="#">Forgot Password</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
