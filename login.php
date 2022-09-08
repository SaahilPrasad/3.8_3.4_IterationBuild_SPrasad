<!-- Creates session. -->
<?php
	ob_start();
	session_start();
		$error = NULL;
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			//connect.php (tells where to connect servername, dbaseName, username, password)
			require "91902_Database_Assessment_mysqli.php";
			// username and password sent from form
			$myusername = mysqli_real_escape_string($conn,$_POST['username']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
			
			$query = "SELECT Username FROM user_details WHERE Username = '$myusername' and Password = '$mypassword'";
			
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			$count = mysqli_num_rows($result);
			
			// If result matched $myusername and $mypassword, table row must be 1 row
			if($count == 1) {
				$_SESSION['login_user'] = $myusername;
				header("location: index.php");
			} 
			else {
				$error = "Invalid Credentials, Please Try Again";
				}
			}
	ob_end_flush();
?>

<!-- HTML starts here -->
<!DOCTYPE html>

<!-- HTML language = english -->
<html lang="en">
	
	<head>
		<!-- Favicon (Zeta icon), which will be displayed on browser tabs -->
		<link rel="icon" type="image/x-icon" href="images/zetafavicon1.png">
		
		<!-- Title, which will be displayed on browser tabs -->
		<title>ZetaMusic | Login</title>
		
		<!-- Meta data -->
		<meta charset="utf-8">
		<meta name="Keywords" content="ZetaMusic"/>
		<meta name="Author" content="Saahil Prasad"/>
		<meta name="Description" content="ZetaMusic Database Website"/>
		
		<!-- IMPORTANT as I am using vw for responsive design -->
		<meta name="Viewport" content="width=device-width, inital-scale=1">
		
		<!-- Link to style sheet -->
		<link rel="stylesheet" href="css/style_login.css"/>
		
		<!-- Link to javascript files -->
		<script src="js/script.js"></script>
		<script src="js/back_to_top.js"></script>
	</head>
	
	<body>
		
		<!-- grid-container class which contains all content using CSS grid -->
		<div class="grid-container">
			
			<!-- Zeta loading screen -->
			<div class="loading_screen">
				<center>
					<img class = "zoom-in-out-box" src="images/officialzetalogo.png" alt = "Zeta Logo" style = "height: 3.5vw; width: 14.2vw;">
					<h1 style = "font-family: 'Roboto', sans-serif; font-size: 1.5vw; color: #fff; padding: 1.2vw 0vw 0vw 0vw;">Loading Your Zeta Music Experience...</h1>
				</center>
			</div>
			
			<script src="js/loading.js"></script>
			
			<!-- Navigation located at the very top -->				
			<div class="nav">
				
				<!-- Logo box -->
				<div class="logo">
					<div class = "logo2">
						<ul>
							<li>
								<a href="login.php"><img src="images/officialzetalogo.png" alt = "Zeta Logo" style = "height: 3.3vw; width: 13.3vw; margin-top: -0.95vw;"></a>
							</li>
						</ul>
					</div>
				</div>
				
			</div>

			<!-- content_1 to hold the header and login box -->
			<div class = "content_1">
				
				<!-- header -->
				<div class = "header" style="background-image: url('images/loginheader.jpg'); background-size: 71vw 50vw; background-position: 0vw;">
					<b><h1>Magical Moments Start<br>With Music.</h1></b>
				</div>
				
				<!-- login box -->
				<div class = "login_box">
					
					<div class = "logintext">
						<img src="images/usericon1.png" alt = "User Icon 1" style = "height: 6.5vw; width: 6.5vw; background-position: 0vw; margin: 3.8vw 0vw 0vw 1vw;">
						<b><h2 style = "font-size: 3.2vw; float: right; padding: 2.6vw 1.3vw 0vw 0vw;">LOGIN</h2></b>
					</div>
					
					<!-- login field class which holds the form -->
					<div class = "loginfields">
					
						<!-- Form for input fields -->
						<form method = "post" id= "01_login">

							<center><input style = "width: 20vw; height: 1.9vw; margin: 2vw 0vw 0vw 0vw; font-family: 'Roboto', sans-serif; color: #fff;" type = "text" name = "username" placeholder="Username..."/></center>

							<center><input style = "width: 20vw; height: 1.9vw; margin: 3.07vw 0vw 0vw 0vw; font-family: 'Roboto', sans-serif; color: #fff;" type = "password" name = "password" placeholder="Password..." id="myInput"/></center>

							<b><p style = "margin: 1.45vw 0vw -1.3vw 1.9vw; font-family: 'Roboto', sans-serif; font-size: 1vw; color: #fff;">Show Password</p></b>

							<!-- Checkbox for password visibility -->
							<input type="checkbox" onclick="myFunction()"/>

							<center><input style = "width: 20.5vw; height: 2.5vw; margin: 2.97vw 0vw 0vw 0vw;" type = "submit" name = "submit" value = "Login"/></center>

						</form>

						<center><p style = "margin: 1.7vw 0vw 0vw 0vw; font-family: 'Roboto', sans-serif; font-size: 1vw; color: #fff;">Need An Account?<a href = "register.php"> Register</a></p></center>
					
					</div>
					
					<!-- message class, which contains the error and success message output -->		
					<div class = "message">
						<center><p style = "color: #dc323e; margin: 0.7vw 0vw 0vw 0vw; font-family: 'Roboto', sans-serif; font-size: 1vw;"><?php echo $error; ?></p></center>
					</div>
					
				</div>
	
			</div>

		</div>

	</body>

<!-- HTML ends here -->
</html>
