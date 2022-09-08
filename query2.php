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
		<!-- Favicon (Zeta icon), which will be displayed on browser tabs -->
		<link rel="icon" type="image/x-icon" href="images/zetafavicon1.png">
		
		<!-- Title, which will be displayed on browser tabs -->
		<title>ZetaMusic | Query Two</title>
		
		<!-- Meta data -->
		<meta charset="utf-8">
		<meta name="Keywords" content="ZetaMusic"/>
		<meta name="Author" content="Saahil Prasad"/>
		<meta name="Description" content="ZetaMusic Database Website"/>
		
		<!-- IMPORTANT as I am using vw for responsive design -->
		<meta name="Viewport" content="width=device-width, inital-scale=1">
		
		<!-- Link to style sheet -->
		<link rel="stylesheet" href="css/style_query.css"/>
		
		<!-- Link to javascript files -->
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/back_to_top.js"></script>
	</head>
	
	<body>
	
		<!-- grid-container class which contains all content using CSS grid -->
		<div class="grid-container">
		
			<!-- header class which consists of the header image, text logo and navigation system -->
			<div class="header" style="background-image: url('images/zetaheader22.jpg'); background-size: 100vw 25vw; background-position: 0vw;">
				
				<?php
				if(session_id() == ''){session_start();}
				if(isset($_SESSION['login_user'])){
				?>
				
				<!-- Logo box -->
				<div class="logo" style="top: 0vw; position: sticky;">
					<div class = "logo2">
						<ul>
							<li>
								<a href="index.php"><img src="images/officialzetalogo.png" alt = "Zeta Logo" style = "height: 3.3vw; width: 13.3vw; margin-top: -0.95vw;"></a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- navigation located at the very top -->		
				<div class="nav" style="top: 0vw; position: sticky;">
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
						<img src="images/usericon2.png" alt = "User Icon 2" style = "height: 1.8vw; width: 1.8vw; position: absolute; margin: -0.3vw 0vw 0vw -1.5vw;">
						</li>
						<li style = "margin-left: -1.5vw; color: white;"><?php echo $_SESSION['login_user'];?></li>
						<li class ="hover-underline-animation" style = "margin-right: 0vw;"><a href="signout.php">Sign Out</a></li>
					</ul>
				</div>
				
				<!-- Text displayed in header -->
				<div class = "headertext">
					<b><p>Party All Night</p></b>
					<b><p style = "margin-top: -2vw; font-size: 1.8vw;">Query Two</p></b>
					<b><p style = "margin-top: -1.7vw; font-size: 1.8vw;">Sorted By Genre, Artist ASC</p></b>
				</div>
			
			</div>
			
			<?php } else {
			?>
			
			<?php }
			?>
			
			<!-- search_content which contains the search system -->
			<div class = "search_content" style="position: sticky; top: 0vw;">
				
				<center><form action="search.php" method="post">
					<input type="text" autocomplete="off" class="search" style = "font-family: 'Roboto', sans-serif; font-size: 1vw;" placeholder="Search For Music..." name="search">
					<button class="button" type="submit"><img src="images/searchicon12.png" alt = "Search Icon" style = "height: 2.3vw; width: 2.3vw; margin-top: -1.5vw; margin-left: -1.2vw; position: absolute;"></button>
				</form></center>
			
			</div>
			
			<!-- Total duration query via SQL -->
			<?php
				require "91902_Database_Assessment_mysqli.php";

				$total_time = ("SELECT SEC_TO_TIME(SUM(s.Duration)) AS 'Total Duration' 
					
				FROM song_details AS s
				
				INNER JOIN album a ON s.Album_PK = a.Album_PK

				JOIN title_to_artist j ON s.Title_PK = j.Title_PK
				JOIN artist b ON b.Artist_PK = j.Artist_PK

				JOIN title_to_genre k ON s.Title_PK = k.Title_PK
				JOIN genre c ON c.Genre_PK = k.Genre_PK");
					
				//Runs and stores the query using the varibales $conn (see nav.php) and $query
				$result = mysqli_query($conn,$total_time);
				//runs in a 'while' loop
				while($output=mysqli_fetch_array($result))

				{
			?>

			<div class = "total_duration" style="position: sticky; top: 6vw;">
				<div class = "clock">
					<img src="images/clockicon1.png" alt = "Clock Icon" style = "height: 1.5vw; width: 1.5vw; position: absolute; margin-top: 0.07vw; margin-left: 0.4vw;">
				</div>
				<div class = "durationtxt">
					<center><b><p style = "color: white; font-family: 'Roboto', sans-serif; font-size: 1.3vw; margin-top: 0.05vw; position: absolute;"><?php echo $output['Total Duration']; ?></b></center>
				</div>
			</div>
			
			<?php }
			?>

			<!-- content_1 to hold the query headings and output -->
			<div class = "content_1">
				
				<!-- query_rows for query title -->
				<div class="query_rows" style=" margin: 0vw 0vw 0vw 0vw; grid-column: 1 / span 2; grid-row: 1; display: grid; grid-template-columns: 1.5vw 0.14fr 0vw 0.13fr 1vw 0.47fr 1.3vw 0.37fr 1vw 0.6fr 1.4vw 0.3fr 1vw 0.25fr 1.3vw 0.17fr 1vw; border-bottom: 0.1vw solid #808080; background-color: #242424; position: sticky; top: 8vw;">

					<div class = "cover" style = "grid-column: 2;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">#</p></b>
					</div>
					
					<div class = "song_id"  style = "grid-column: 4;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;"></p></b>
					</div>
					
					<div class = "title"  style = "grid-column: 6;">
						<b><p style = "color: white; font-size: 1.3vw; margin: 0.8vw 0vw 0vw 0vw;">Title</p></b>
					</div>
					
					<div class = "artist"  style = "grid-column: 8;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Artist</p></b>
					</div>
					
					<div class = "album"  style = "grid-column: 10;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Album</p></b>
					</div>
					
					<div class = "genre"  style = "grid-column: 12;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Genre</p></b>
					</div>
					
					<div class = "duration"  style = "grid-column: 14;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Duration (S)</p></b>
					</div>
					
					<div class = "size"  style = "grid-column: 16;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Size (KB)</p></b>
					</div>

				</div>
				
				<!-- Query Two via SQL -->
				<?php
					require ("91902_Database_Assessment_mysqli.php");

					//Creates a variable to store the sql query
					$query = ("SELECT s.Title_PK, s.Title, s.Duration, s.Size, s.SongCover, a.Album, b.Artist, c.Genre

					FROM song_details AS s

					INNER JOIN album a ON s.Album_PK = a.Album_PK

					JOIN title_to_artist j ON s.Title_PK = j.Title_PK
					JOIN artist b ON b.Artist_PK = j.Artist_PK

					JOIN title_to_genre k ON s.Title_PK = k.Title_PK
					JOIN genre c ON c.Genre_PK = k.Genre_PK

					ORDER BY c.Genre ASC, b.Artist ASC");

					//Runs and stores the query using the varibales $conn (see nav.php) and $query
					$result = mysqli_query($conn,$query);
					//runs in a 'while' loop
					while($output=mysqli_fetch_array($result))
					{
				?>
				
				<!-- query_rows for query output via SQL -->
				<div class="query_rows" style="margin: 0vw 0vw 0vw 0vw; grid-column: 1 / span 2; grid-row: auto; display: grid; grid-template-columns: 1.5vw 0.14fr 0vw 0.13fr 1vw 0.47fr 1.3vw 0.37fr 1vw 0.6fr 1.4vw 0.3fr 1vw 0.25fr 1.3vw 0.17fr 1vw; border-bottom: 0.1vw solid #808080;">

					<div class = "cover" style = "grid-column: 2;">
						<b><p style = "font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.7vw 0vw 0vw 0vw;"><?php echo $output['Title_PK']; ?></b>
						<!--<b><p style = "color: white; font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.5vw 0vw 0.5vw 0vw;"></b>-->
					</div>
					
					<div class = "song_id" style = "grid-column: 4;">
						<img src="images/covers/<?php echo $output['SongCover']; ?>" style = "height: 2vw; width: 2vw; padding: 0.3vw 0vw 0vw 0vw;" alt="Cover">
					</div>
					
					<div class = "title" style = "grid-column: 6; border-right: 0vw solid white;">
						<b><p style = "font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.7vw 0vw 0vw 0vw;"><?php echo $output['Title']; ?></p></b>
					</div>
					
					<div class = "artist" style = "grid-column: 8;">
						<b><p style = "font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.7vw 0vw 0vw 0vw;"><?php echo $output['Artist']; ?></p></b>
					</div>
					
					<div class = "album" style = "grid-column: 10;">
						<b><p style = "font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.7vw 0vw 0vw 0vw;"><?php echo $output['Album']; ?></p></b>
					</div>
					
					<div class = "genre" style = "grid-column: 12;">
						<b><p style = "font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.7vw 0vw 0vw 0vw;"><?php echo $output['Genre']; ?></p></b>
					</div>
					
					<div class = "duration" style = "grid-column: 14;">
						<b><p style = "margin: 0vw 0vw 0vw 0vw; padding: 0.7vw 0vw 0.5vw 0vw;"><?php echo $output['Duration']; ?></p></b>
					</div>
					
					<div class = "size" style = "grid-column: 16;">
						<b><p style = "font-size: 1.03vw; margin: 0vw 0vw 0vw 0vw; padding: 0.7vw 0vw 0vw 0vw;"><?php echo $output['Size']; ?></p></b>
					</div>
				</div>
				
				<?php }
				?>
				
			</div>

			<!-- Creates space between contents via CSS grid -->	
			<div class = "space_1">
			</div>
		
			<!-- footer class to display legal message - sources and copyright statement -->
			<div class = "footer">
				<h3 style = "margin-top: 2.5vw; margin-left: 6vw;">Note</h3>
				<p style = "font-family: 'Noto Sans', sans-serif; font-size: 1.1vw; color: #fff; margin-top: -3.5vw; margin-left: 6vw;">All Album Covers Have Been Sourced From Spotify.<br>Other Images Have Been Sourced From Creative Commons.</p>
				<b><p style = "font-family: 'Noto Sans', sans-serif; font-size: 1.1vw; color: #fff; margin-top: -1.2vw; margin-left: 6vw;">&copy Copyright Saahil Prasad 2022, All Rights Reserved.</p></b>
				
				<div id = "back_to_top_btn1" onclick="topFunction()" style="height: 8vw; width: 8vw; margin: -9.5vw 0vw 0vw 85.3vw;">
					<img src="images/back_to_top_btn.png" alt = "Back To Top Btn" style="height: 8vw; width: 8.5vw; transition: 0.5s;">
				</div>
			</div>
		
		</div>
							
	</body>

<!-- HTML ends here -->
</html>
