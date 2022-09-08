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
			<div class="header" style="background-image: url('images/trial2/mainheader2.jpg'); background-size: 100vw 55vw; background-position: 0vw;">
				
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
						<img src="images/trial2/usericon4.png" alt = "User Icon 2" style = "height: 1.8vw; width: 1.8vw; position: absolute; margin: -0.3vw 0vw 0vw -1.5vw;">
						</li>
						<li style = "margin-left: -1.5vw; color: white;"><?php echo $_SESSION['login_user'];?></li>
						<li class ="hover-underline-animation" style = "margin-right: 0vw;"><a href="signout.php">Sign Out</a></li>
					</ul>
				</div>
				
				<!-- Text displayed in header -->
				<div class = "headertext">
					<h1 style = "padding: 7.95vw 0vw 0vw 6vw;">Elevate Your Listening Experience...</h1>
				</div>
				
				<div class = "headertext2">
					<form action="#search_content"><input style = "font-size: 2.5vw; width: 21vw; height: 3.7vw; margin: 0vw 0vw 0vw 0vw;" type = "submit" value = "Browse Now"/></form>
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
					<button class="button" type="submit"><img src="images/trial2/searchicon2.png" alt = "Search Icon" style = "height: 2.6vw; width: 2.6vw; margin-top: -1.75vw; margin-left: -1.2vw; position: absolute;"></button>
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
					
					<div class = "genre1" style = "overflow: hidden; transition: 0.6s; cursor: pointer;">
						<a href="pop.php"><img src="images/trial2/genre5.jpg" alt = "Genre 1 - Pop" style = "width: 15vw; height: 12vw;">
						<div class="overlay">
    						<div class="text" style = "margin-top: 10vw; margin-left: 5.4vw;">Pop</div>
  						</div></a>
					</div>
					
					<div class = "genre2" style = "overflow: hidden; transition: 0.6s; cursor: pointer;">
						<a href="country.php"><img src="images/trial2/genre6.jpg" alt = "Genre 2 - Country" style = "width: 15vw; height: 12vw;">
						<div class="overlay">
    						<div class="text" style = "margin-top: 10vw; margin-left: 5.4vw;">Country</div>
  						</div></a>
					</div>
					
					<div class = "genre3" style = "overflow: hidden; transition: 0.6s; cursor: pointer;">
						<a href="rock.php"><img src="images/trial2/genre7.jpg" alt = "Genre 3 - Rock" style = "width: 15vw; height: 12vw;">
						<div class="overlay">
    						<div class="text" style = "margin-top: 10vw; margin-left: 5.4vw;">Rock</div>
						</div></a>
					</div>
					
					<div class = "genre4" style = "overflow: hidden; transition: 0.6s; cursor: pointer;">
						<a href="folk.php"><img src="images/trial2/genre8.jpg" alt = "Genre 4 - Folk" style = "width: 15vw; height: 12vw;">
						<div class="overlay">
    						<div class="text" style = "margin-top: 10vw; margin-left: 5.4vw;">Folk</div>
						</div></a>
					</div>

				</div>
				
				<!-- content_playlist class to hold playlist text and all playlist images -->
				<div class = "content_playlist">
					
					<div class = "playlisttext">
						<h3 style = "margin-top: 0vw;">Playlists</h3>
						<p style = "margin-top: -2.3vw;">Suggested Playlists For You To Delve Into!</p>
					</div>
				
					<div class = "playlist1" style = "overflow: hidden; transition: 0.6s; cursor: pointer;">
						<a href="airplane.php"><img src="images/trial2/playlist5.jpg" alt = "Playlist 1 - Airplane Mode" style = "width: 15vw; height: 12vw;">
						<div class="overlay">
    						<div class="text" style = "margin-top: 10vw; margin-left: 5.4vw;">Airplane Mode</div>
						</div></a>
					</div>
					
					<div class = "playlist2" style = "overflow: hidden; transition: 0.6s; cursor: pointer;">
						<a href="onthego.php"><img src="images/trial2/playlist6.jpg" alt = "Playlist 2 - On The Go" style = "width: 15vw; height: 12vw;">
						<div class="overlay">
							<div class="text" style = "margin-top: 10vw; margin-left: 5.4vw;">On The Go</div>
						</div></a>
					</div>
					
					<div class = "playlist3" style = "overflow: hidden; transition: 0.6s; cursor: pointer;">
						<a href="thejourney.php"><img src="images/trial2/playlist7.jpg" alt = "Playlist 3 - The Journey" style = "width: 15vw; height: 12vw;">
						<div class="overlay">
							<div class="text" style = "margin-top: 10vw; margin-left: 5.4vw;">The Journey</div>
						</div></a>
					</div>
					
					<div class = "playlist4" style = "overflow: hidden; transition: 0.6s; cursor: pointer;">
						<a href="studying.php"><img src="images/trial2/playlist8.jpg" alt = "Playlist 4 - Studying Tunes" style = "width: 15vw; height: 12vw;">
						<div class="overlay">
							<div class="text" style = "margin-top: 10vw; margin-left: 5.4vw;">Studying Tunes</div>
						</div></a>
					</div>

				</div>
			
			</div>
			
			<!-- promotion_header class to promote/ advertise Graeme's two playlists (Query One, Query Two) -->
			<div class = "promotion_header" style="background-image: url('images/trial2/promoheader2.jpg'); background-size: 100vw 30vw; background-position: 0vw;">
				<div class = "promotiontext1">
					<h2 style = "font-size: 3.7vw; padding: 2vw 0vw 0vw 6vw;">Check Out Graeme's<br>Playlists!</h2>
					<h3 style = "font-size: 2.6vw; margin: -16.1vw 0vw 0vw 90vw; color: #b6f9f2;">NEW</h3>
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
				
				<div id = "back_to_top_btn1" onclick="topFunction()" style="height: 8vw; width: 8vw; margin: -9.5vw 0vw 0vw 85.3vw;">
					<img src="images/trial2/back_to_top_btn_2.png" alt = "Back To Top Btn" style="height: 8vw; width: 8.5vw; transition: 0.5s;">
				</div>
			</div>
			
		</div>
							
	</body>

<!-- HTML ends here -->
</html>
