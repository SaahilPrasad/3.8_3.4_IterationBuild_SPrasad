<!-- HTML starts here -->
<!DOCTYPE html>

<!-- HTML language = english -->
<html lang="en">
	
	<head>
		<!-- Title, which will be displayed on browser tabs -->
		<title>ZetaMusic | Register</title>
		
		<!-- Meta data -->
		<meta charset="utf-8">
		<meta name="Keywords" content="ZetaMusic"/>
		<meta name="Author" content="Saahil Prasad"/>
		<meta name="Description" content="ZetaMusic Database Website"/>
		
		<!-- IMPORTANT as I am using vw for responsive design -->
		<meta name="Viewport" content="width=device-width, inital-scale=1">
		
		<!-- Link to style sheet for login_v1 page -->
		<link rel="stylesheet" href="css/style_login.css"/>
	</head>
	
	<body>
		
		<!-- grid-container class which contains all content using CSS grid -->
		<div class="grid-container">
			
			<!-- navigation located at the very top -->				
			<div class="nav">
				<b><p style = "color: white; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Navigation</p></b>
			</div>

			<!-- content_1 to hold the header and login box -->
			<div class = "content_1">
				
				<b><p style = "color: black; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Header</p></b>
				
				<!-- login box -->
				<div class = "login_box">
				
					<b><p style = "color: black; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Register</p></b>
					
					<h3><form method = "post" id= "01_login">
						
						<p style = "margin: 2.3vw 0vw 0vw 3.7vw; font-size: 1.4vw;">Username:</p>
						<input style = "width: 18.8vw; height: 1.9vw; margin: 1vw 2vw 0vw 3.7vw;" type = "text" name = "username" placeholder="Your Username..."/>
						
						<p style = "margin: 1.5vw 0vw 0vw 3.7vw; font-size: 1.4vw;">Password:</p>
						<input style = "width: 18.8vw; height: 1.9vw; margin: 1vw 2vw 0vw 3.7vw; font-size: 1.2vw; border: none;" type = "password" name = "password" placeholder="Your Password..." id="myInput"/>
						
						<p style = "margin: 1.3vw 0vw -1.3vw 5.3vw; font-size: 1vw;">Show Password</p>
						
						<!-- Checkbox for password visibility -->
						<input type="checkbox" onclick="myFunction()"/>
						
						<input style = "width: 19.2vw; height: 2.5vw; margin: 2.8vw 2vw 0vw 3.7vw; font-size: 1.2vw; border: none; border-radius: 2vw;" type = "submit" value = "Register"/>
					
					</form></h3>
					
					<center><p style = "margin: -6vw 0vw 0vw 0vw; font-size: 1vw;">Return Back To<a href = "login_v2.html"> Login</a></p></center>
					
				</div>
	
			</div>

		</div>

	</body>

<!-- HTML ends here -->
</html>
