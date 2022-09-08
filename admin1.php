<!-- Session - ensures that user is logged in to grant access to page -->
<?php
	session_start();
    if(!isset($_SESSION['login_user'])){
		header("location:login.php");
	}
	else{
		$User = $_SESSION['login_user'];
	}
?>

<!-- HTML starts here -->
<!DOCTYPE html>

<!-- HTML language = english -->
<html lang="en">
	
	<head>
		<!-- Title, which will be displayed on browser tabs -->
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
		
		<!-- Link to javascript files -->
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/back_to_top.js"></script>
	</head>
	
	<body>
		
		<!-- grid-container class which contains all content using CSS grid -->
		<div class="grid-container">
			
			<!-- Navigation located at the very top -->				
			<div class="nav">

				<?php
				if(session_id() == ''){session_start();}
				if(isset($_SESSION['login_user'])){
				?>
				
				<!-- Logo box -->
				<div class="logo" style="top: 0vw; position: sticky;">
					<div class = "logo2">
						<ul>
							<li>
								<a href="index.php"><img src="images/trial2/zetalogo2.png" alt = "Zeta Logo" style = "height: 3.5vw; width: 11.5vw; margin: -1.15vw 0vw 0vw -0.3vw;"></a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- nav 2 containing the navigation links -->
				<div class="nav2" style="top: 0vw; position: sticky;">
					<ul>
						<li class ="hover-underline-animation" style="margin-left: 0vw; margin-right: 0vw;"><a href="query1.php">Query One</a></li>
						<li class ="hover-underline-animation"><a href="query2.php">Query Two</a></li>

						<!-- Determines if the user is a standard user or admin (Graeme) and will output the navigation links with respect to this -->
						<?php
							if ($_SESSION['login_user'] == "Graeme" or $_SESSION['login_user'] == "graeme"){
								echo "<li class ='hover-underline-animation'><a href='admin1.php'>Settings</a></li>";
							}
						?>
						
						<li style = "color: white; margin-right: 1.1vw; ">|</li>
						<li>
						<img src="images/trial2/usericon4.png" alt = "User Icon 2" style = "height: 1.8vw; width: 1.8vw; position: absolute; margin: -0.3vw 0vw 0vw -1.5vw;">
						</li>
						<li style = "margin-left: -1.5vw; color: white;"><?php echo $_SESSION['login_user'];?></li>
						<li class ="hover-underline-animation" style = "margin-right: 0vw;"><a href="signout.php">Sign Out</a></li>
					</ul>
				</div>
				
			</div>
			
			<?php } else {
			?>
			
			<?php }
			?>

			<!-- content_1 to hold the header, login box, admin navigation links/ buttons and display users -->
			<div class = "content_1">
				
				<!-- header -->
				<div class = "header" style="background-image: url('images/trial2/zetaadmin4.jpg'); background-size: 71vw 50vw; background-position: 0vw;">
					<b><h1>Administrator Settings<br>To Enhance Security</h1></b>
					
					<div class = "btn1">
						<form action="admin1.php"><input style = "font-size: 1.1vw; width: 11.2vw; height: 2.5vw; margin: 0vw 0vw 0vw 0vw;" type = "submit" value = "Add User"/></form>
					</div>
					
					<div class = "btn2">
						<form action="admin2.php"><input style = "font-size: 1.1vw; width: 11.2vw; height: 2.5vw; margin: 0vw 0vw 0vw 0vw;" type = "submit" value = "Update Username"/></form>
					</div>
					
					<div class = "btn3">
						<form action="admin3.php"><input style = "font-size: 1.1vw; width: 11.2vw; height: 2.5vw; margin: 0vw 0vw 0vw 0vw;" type = "submit" value = "Update Password"/></form>
					</div>
					
					<div class = "btn4">
						<form action="admin4.php"><input style = "font-size: 1.1vw; width: 11.2vw; height: 2.5vw; margin: 0vw 0vw 0vw 0vw;" type = "submit" value = "Delete User"/></form>
					</div>
				</div>
				
				<!-- login box -->
				<div class = "login_box">
					
					<div class = "logintext">
						<img src="images/trial2/usericon3.png" alt = "User Icon 1" style = "height: 6.5vw; width: 6.5vw; background-position: 0vw; margin: 3.8vw 0vw 0vw 1vw;">
						<b><h3 style = "font-size: 2.8vw; float: right; padding: 2.7vw 0vw 0vw 0vw;">ADD USER</h3></b>
					</div>
					
					<!-- login field class which holds the form -->
					<div class = "loginfields">
					
						<!-- Form for input fields -->
						<form method = "post" id= "01_login">

							<center><input style = "width: 20vw; height: 1.9vw; margin: 2vw 0vw 0vw 0vw; font-family: 'Roboto', sans-serif; color: #fff;" type = "text" name = "username" placeholder="Username..."/></center>

							<center><input style = "width: 20vw; height: 1.9vw; margin: 3.07vw 0vw 0vw 0vw; font-family: 'Roboto', sans-serif; color: #fff;" type = "password" name = "password" placeholder="Password..." id="myInput"/></center>

							<b><p  style = "margin: 1.45vw 0vw -1.3vw 1.9vw; font-family: 'Roboto', sans-serif; font-size: 1vw; color: #fff;">Show Password</p></b>

							<!-- Checkbox for password visibility -->
							<input type="checkbox" onclick="myFunction()"/>

							<center><input style = "width: 20.5vw; height: 2.5vw; margin: 2.97vw 0vw 0vw 0vw;" type = "submit" name = "submit" value = "Add User"/></center>

						</form>
					
					</div>
					
					<!-- message class, which contains the error and success message output -->		
					<div class = "message">
						
						<!-- Register/ insert user via SQL -->
						<?php
							require "91902_Database_Assessment_mysqli.php";

							if(isset($_POST['submit']))
								{
								$un = $_POST['username']; 
								$pw = $_POST['password'];

								$insertquery = "INSERT INTO user_details (Username, Password) VALUES ('$un', '$pw')";

								if (mysqli_query($conn,$insertquery))
									{
									echo "<center><p style = 'color: #1eae6b; margin: 0.7vw 0vw 0vw 0vw; font-family: Roboto, sans-serif; font-size: 1vw;'>User Successfully Added</p></center>";
									}
								else{
									echo "<center><p style = 'color: #dc323e; margin: 0.7vw 0vw 0vw 0vw; font-family: Roboto, sans-serif; font-size: 1vw;'>Invalid Credentials, Please Try Again</p></center>";
									}
							}

						?>
						
					</div>
					
				</div>
				
				<!-- content_2, which contains content_3 -->
				<div class = "content_2" style = "background-color: transparent; height: 16.5vw;">
				
					<!-- content_3, which contains the query row title and query row output via SQL -->
					<div class = "content_3" style = "background-color: transparent;">

						<!-- query_rows for query title -->
						<div class="query_rows" style="margin: 0vw 0vw 0vw 0vw; grid-row: 1; height: 2.5vw; display: grid; grid-template-columns: 3vw 0.6fr 0vw 0.6fr 0vw 0.6fr 0vw 0.4fr; border-bottom: 0.1vw solid #fff; background-color: #242424;">

							<div class = "user_details1" style = "grid-column: 2;">
								<b><p style = "color: white; font-size: 1.2vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;">User ID</p></b>
							</div>

							<div class = "user_details2" style = "grid-column: 4;">
								<b><p style = "color: white; font-size: 1.2vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;">Username</p></b>
							</div>

							<div class = "user_details3" style = "grid-column: 6;">
								<b><p style = "color: white; font-size: 1.2vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;">Password</p></b>
							</div>
							
							<div class = "user_details4" style = "grid-column: 8;">
								<b><p style = "color: white; font-size: 1.2vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;">User Type</p></b>
							</div>

						</div>

						<!-- query_row output - display users via SQL -->
						<?php
							require ("91902_Database_Assessment_mysqli.php");

							//Creates a variable to store the sql query
							$query = ("SELECT * FROM user_details");

							//Runs and stores the query using the varibales $conn (see nav.php) and $query
							$result = mysqli_query($conn,$query);
							//runs in a 'while' loop
							while($output=mysqli_fetch_array($result))
							{
						?>

						<!-- query_rows for query output via SQL -->
						<div class="query_rows" style="margin: 0vw 0vw 0vw 0vw; display: grid; grid-template-columns: 3vw 0.6fr 0vw 0.6fr 0vw 0.6fr 0vw 0.4fr; border-bottom: 0.1vw solid #fff;">

							<div class = "user_details1" style = "grid-column: 2;">
								<b><p style = "color: white; font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;"><?php echo $output['Users_PK']; ?></b>
							</div>

							<div class = "user_details2" style = "grid-column: 4;">
								<b><p style = "color: white; font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;"><?php echo $output['Username']; ?></p></b>
							</div>

							<div class = "user_details3" style = "grid-column: 6;">
								<b><p style = "color: white; font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;"><?php echo $output['Password']; ?></p></b>
							</div>

							<div class = "user_details4" style = "grid-column: 8;">
								<b><p style = "color: white; font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;"><?php echo $output['UserType']; ?></p></b>
							</div>

						</div>

						<?php
						// Closes the output while loop
						}
						?>

					</div>
					
				</div>
	
			</div>

		</div>

	</body>

<!-- HTML ends here -->
</html>
