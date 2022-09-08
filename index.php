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
		<title>ZetaMusic | Home</title>
		
		<!-- Meta data -->
		<meta charset="utf-8">
		<meta name="Keywords" content="ZetaMusic"/>
		<meta name="Author" content="Saahil Prasad"/>
		<meta name="Description" content="ZetaMusic Database Website"/>
		
		<!-- IMPORTANT as I am using vw for responsive design -->
		<meta name="Viewport" content="width=device-width, inital-scale=1">
		
		<!-- Link to style sheet -->
		<link rel="stylesheet" href="css/style_index.css"/>
		
		<!-- Link to javascript files -->
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/back_to_top.js"></script>
	</head>
	
	<body>
	
		<!-- grid-container class which contains all content using CSS grid -->
		<div class="grid-container">
			
			<!-- header class which consists of the header image, text logo and navigation system -->
			<div class="header">
				
				<?php
				if(session_id() == ''){session_start();}
				if(isset($_SESSION['login_user'])){
				?>
				
				<!-- Logo box -->
				<div class="logo" style="top: 0vw; position: sticky;">
					<ul>
						<li style="margin-left: 7.5vw; position: absolute; padding-left: 0vw; margin-right: 0vw;"><a href="index.php">LOGO</a></li>
					</ul>
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
						
						<li style = "color: white;">|</li>
						<li style = "color: white;"><?php echo $_SESSION['login_user'];?></li>
						<li class ="hover-underline-animation" style = "margin-right: 0vw;"><a href="signout.php">Sign Out</a></li>
					</ul>
				</div>
				
				<!-- Text displayed in header -->
				<div class = "headertext">
					<h1 style = "padding: 7.95vw 0vw 0vw 6vw;">Elevate Your Listening Experience...</h1>
				</div>
				
				<div class = "headertext2">
					<form action="index.php#search_content"><input style = "font-size: 2.5vw; width: 21vw; height: 3.7vw; margin: 0vw 0vw 0vw 0vw;" type = "submit" value = "Browse Now"/></form>
				</div>
				
			</div>
			
			<?php } else {
			?>
			
			<?php }
			?>
			
			<!-- search_content which contains the search system -->
			<div id="search_content">
				
				<center><form action="search.php" method="post">
					<input type="text" autocomplete="off" class="search" style = "border: 0.25vw solid #fff; font-family: 'Roboto', sans-serif;" placeholder="Search For Music..." name="search">
					<button class="button" type="submit">Search</button>
				</form></center>
			
			</div>
			
			<div class = "line">
			</div>
			
			<!-- Creates space between contents via CSS grid -->
			<div class="space_1">
			</div>
			
			<!-- content_1 to hold the genre and playlist image classes -->
			<div class = "content_1">
				
				<!-- content_genre class to hold genre text and all genre covers/ images -->
				<div class = "content_genre">
					
					<div class = "genretext">
						<h3 style = "margin-top: 0vw;">Genres</h3>
						<p style = "margin-top: -2.3vw;">Explore Some Of Our Popular Genres!</p>
					</div>
				
					<div class = "genre1">
						<b><p>Genre 1</p></b>
					</div>
					
					<div class = "genre2">
						<b><p>Genre 2</p></b>
					</div>
					
					<div class = "genre3">
						<b><p>Genre 3</p></b>
					</div>
					
					<div class = "genre4">
						<b><p>Genre 4</p></b>
					</div>

				</div>
				
				<!-- content_playlist class to hold playlist text and all playlist images -->
				<div class = "content_playlist">
					
					<div class = "playlisttext">
						<h3 style = "margin-top: 0vw;">Playlists</h3>
						<p style = "margin-top: -2.3vw;">Suggested Playlists For You To Delve Into!</p>
					</div>
				
					<div class = "playlist1">
						<b><p>Song 1</p></b>
					</div>
					
					<div class = "playlist2">
						<b><p>Song 2</p></b>
					</div>
					
					<div class = "playlist3">
						<b><p>Song 3</p></b>
					</div>
					
					<div class = "playlist4">
						<b><p>Song 4</p></b>
					</div>

				</div>
			
			</div>
			
			<!-- promotion_header class to promote/ advertise Graeme's two playlists (Query One, Query Two) -->
			<div class = "promotion_header">
				<div class = "promotiontext1">
					<h2 style = "font-size: 3.7vw; padding: 2vw 0vw 0vw 6vw;">Check Out Graeme's<br>Playlists!</h2>
				</div>
				
				<div class = "promotiontext2">
					<form action="query1.php"><input style = "font-size: 2vw; width: 18vw; height: 3.5vw; margin: 0vw 0vw 0vw 0vw;" type = "submit" value = "Party All Day"/></form>
				</div>
				
				<div class = "promotiontext3">
					<center><h3 style = "font-size: 3.3vw; margin-top: 0vw; color: #fff;">|</h3></center>
				</div>
				
				<div class = "promotiontext4">
					<form action="query2.php"><input style = "font-size: 2vw; width: 18vw; height: 3.5vw; margin: 0vw 0vw 0vw 0vw;" type = "submit" value = "Party All Night"/></form>
				</div>
			</div>
			
			<!-- footer class to display legal message - sources and copyright statement -->
			<div class = "footer">
				<h3 style = "margin-top: 2.5vw; margin-left: 6vw;">Note</h3>
				<p style = "font-size: 1.1vw; margin-top: -3.5vw; margin-left: 6vw;">All Album Covers Have Been Sourced From Spotify.<br>Other Images Have Been Sourced From Creative Commons.</p>
				<b><p style = "font-size: 1.1vw; margin-top: -1.2vw; margin-left: 6vw;">&copy Copyright Saahil Prasad 2022, All Rights Reserved.</p></b>
			</div>
			
		</div>
							
	</body>

<!-- HTML ends here -->
</html>
