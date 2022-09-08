<!-- HTML starts here -->
<!DOCTYPE html>

<!-- HTML language = english -->
<html lang="en">
	
	<head>
		<!-- Title, which is displayed on browser tabs -->
		<title>ZetaMusic | Add User</title>
		
		<!-- Meta data -->
		<meta charset="utf-8">
		<meta name="Keywords" content="ZetaMusic"/>
		<meta name="Author" content="Saahil Prasad"/>
		<meta name="Description" content="ZetaMusic Database Website"/>
		
		<!-- IMPORTANT as I am using vw for responsive design -->
		<meta name="Viewport" content="width=device-width, inital-scale=1">
		
		<!-- Link to style sheet -->
		<link rel="stylesheet" href="css/style_admin.css"/>
	</head>
	
	<body>
	
		<!-- grid-container class which contains all content using CSS grid -->
		<div class="grid-container">
			
			<!-- navigation located at the very top -->	
			<div class="nav">
				<b><p style = "color: white; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Navigation</p></b>
			</div>
			
			<!-- login box -->
			<div class = "login_box">
				
				<b><p style = "color: black; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Add User</p></b>
				
				<!-- Form for input fields -->
				<h3><form method = "post" id= "01_login">
						
					<input style = "width: 18.8vw; height: 1.9vw; margin: 4vw 0vw 0vw 4.2vw;" type = "text" name = "username" placeholder="Username..."/>
						
					<input style = "width: 18.8vw; height: 1.9vw; margin: 3.05vw 0vw 0vw 4.2vw;" type = "password" name = "password" placeholder="Password..." id="myInput"/>
						
					<p style = "margin: 1.4vw 0vw -1.2vw 5.7vw; font-size: 1vw;">Show Password</p>
						
					<!-- Checkbox for password visibility -->
					<input type="checkbox" onclick="myFunction()"/>
						
					<input style = "width: 19.6vw; height: 2.5vw; margin: 4.4vw 0vw 0vw 4.2vw;" type = "submit" value = "Add User"/>
					
				</form></h3>
					
				<center><p style = "margin: -6.5vw 0vw 0vw 0vw; font-size: 1vw; visibility: hidden;">Need An Account?<a href = "register.html"> Register</a></p></center>
					
			</div>

			<!-- content_1 to hold header, and content_2 -->
			<div class = "content_1">
			
				<!-- header class which consists of the header text -->
				<div class = "header">
					<b><p style = "color: black; font-size: 2vw; margin: 1vw 0vw 0vw 1vw; ">Header</p></b>
				</div>

				<!-- content_2, which contains content_3 -->
				<div class = "content_2" style = "background-color: transparent; height: 17vw;">
				
					<!-- content_3, which contains the query row title and query row output via SQL -->
					<div class = "content_3" style = "background-color: transparent;">

						<!-- query_row title -->
						<div class="query_rows" style="margin: 0vw 0vw 0vw 0vw; grid-row: 1; height: 2.5vw; display: grid; grid-template-columns: 0.5fr 0vw 0.5fr 0vw 0.5fr 0vw 0.5fr; background-color: #424242; position: sticky; top: 0vw;">

							<div class = "cover" style = "grid-column: 1;">
								<b><p style = "color: white; font-size: 1.2vw; margin: 0.1vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;">User ID</p></b>
							</div>

							<div class = "song_id"  style = "grid-column: 3;">
								<b><p style = "color: white; font-size: 1.2vw; margin: 0.1vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;">Username</p></b>
							</div>

							<div class = "title"  style = "grid-column: 5;">
								<b><p style = "color: white; font-size: 1.3vw; margin: 0.1vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;">Password</p></b>
							</div>
							
							<div class = "title"  style = "grid-column: 7;">
								<b><p style = "color: white; font-size: 1.3vw; margin: 0.1vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;">User Type</p></b>
							</div>

						</div>

						<!-- query_row output - display users via SQL -->
						<div class="query_row">
							<b><p style = "color: white; font-size: 2vw; margin: 1vw 0vw 0vw 1vw; grid-column: 1 / span 2;">Display Users</p></b>
						</div>

					</div>
					
				</div>

			</div>

		</div>

	</body>

<!-- HTML ends here -->
</html>
