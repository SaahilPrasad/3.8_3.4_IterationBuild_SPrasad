<!-- HTML starts here -->
<!DOCTYPE html>

<!-- HTML language = english -->
<html lang="en">
	
	<head>
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
				
					<b><p style = "color: black; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Login</p></b>
					
					<!-- Form for input fields -->
					<h3><form method = "post" id= "01_login">
						
						<input style = "width: 18.8vw; height: 1.9vw; margin: 3.9vw 0vw 0vw 4.2vw;" type = "text" name = "username" placeholder="Username..."/>
						
						<input style = "width: 18.8vw; height: 1.9vw; margin: 3.05vw 0vw 0vw 4.2vw;" type = "password" name = "password" placeholder="Password..." id="myInput"/>
						
						<p style = "margin: 1.4vw 0vw -1.3vw 5.7vw; font-size: 1vw;">Show Password</p>
						
						<!-- Checkbox for password visibility -->
						<input type="checkbox" onclick="myFunction()"/>
						
						<input style = "width: 19.6vw; height: 2.5vw; margin: 2.97vw 0vw 0vw 4.2vw;" type = "submit" value = "Login"/>
					
					</form></h3>
					
					<center><p style = "margin: -6.5vw 0vw 0vw 0vw; font-size: 1vw;">Need An Account?<a href = "register.html"> Register</a></p></center>
					
				</div>
	
			</div>

		</div>

	</body>

<!-- HTML ends here -->
</html>
