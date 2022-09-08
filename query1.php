<!-- HTML starts here -->
<!DOCTYPE html>

<!-- HTML language = english -->
<html lang="en">
	
	<head>
	<!-- Title, which will be displayed on browser tabs -->
		<title>ZetaMusic | Query One</title>
		
		<!-- Meta data -->
		<meta charset="utf-8">
		<meta name="Keywords" content="ZetaMusic"/>
		<meta name="Author" content="Saahil Prasad"/>
		<meta name="Description" content="ZetaMusic Database Website"/>
		
		<!-- IMPORTANT as I am using vw for responsive design -->
		<meta name="Viewport" content="width=device-width, inital-scale=1">
		
		<!-- Link to style sheet -->
		<link rel="stylesheet" href="css/style_query.css"/>
	</head>
	
	<body>
	
		<!-- grid-container class which contains all content using CSS grid -->
		<div class="grid-container">
		
			<!-- header class which consists of the header image, text and navigation system -->
			<div class="header">
				
				<b><p style = "color: black; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Header</p></b>
				
				<!-- navigation located at the very top -->		
				<div class="nav" style = "top: 0vw; position: sticky;">
					<b><p style = "color: white; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Navigation</p></b>
				</div>
			
			</div>
			
			<!-- search_content which contains the search system -->
			<div class = "search_content" style="position: sticky; top: 0vw;">
				<form>
						
					<center><input style="width: 45vw; height: 2.3vw; margin: 2.5vw 0vw 0vw 0vw; font-size: 1.1vw;" type="text" autocomplete="off" class="search" placeholder="Search For Music..." name="searched">
						
					<button class="button" style="height: 2.498vw; width: 7vw; margin: 0vw 0vw 0vw 0vw; font-size: 1.1vw;" type="submit">Search</button></center>
						
				</form>
			</div>

			<!-- total_duration which contains the total duration of all tracks/ songs -->
			<div class = "total_duration" style="position: sticky; top: 7vw;">
				<b><p style = "color: black; font-size: 2vw; margin: 0.5vw 0vw 0vw 1vw;">Total Duration</p></b>
			</div>

			<!-- content_1 to hold the query headings and output -->
			<div class = "content_1">
			
				<b><p style = "color: black; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Query One Output</p></b>
				
				<!-- query_rows for query output via SQL -->
				<div class="query_rows" style=" margin: 0vw 0vw 0vw 0vw; grid-column: 1 / span 2; grid-row: 1; display: grid; grid-template-columns: 0.17fr 1vw 0.08fr 1vw 0.47fr 1.3vw 0.37fr 1vw 0.6fr 1.4vw 0.3fr 1vw 0.25fr 1.3vw 0.17fr; background-color: #424242; position: sticky; top: 10vw;">

					<div class = "cover" style = "grid-column: 1;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Cover</p></b>
					</div>
					
					<div class = "song_id"  style = "grid-column: 3;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">#</p></b>
					</div>
					
					<div class = "title"  style = "grid-column: 5;">
						<b><p style = "color: white; font-size: 1.3vw; margin: 0.8vw 0vw 0vw 0vw;">Title</p></b>
					</div>
					
					<div class = "artist"  style = "grid-column: 7;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Artist</p></b>
					</div>
					
					<div class = "album"  style = "grid-column: 9;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Album</p></b>
					</div>
					
					<div class = "genre"  style = "grid-column: 11;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Genre</p></b>
					</div>
					
					<div class = "duration"  style = "grid-column: 13;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Duration (S)</p></b>
					</div>
					
					<div class = "size"  style = "grid-column: 15;">
						<b><p style = "color: white; font-size: 1.2vw; margin: 0.8vw 0vw 0vw 0vw;">Size (KB)</p></b>
					</div>

				</div>
				
			</div>

			<!-- Creates space between contents via CSS grid -->	
			<div class = "space_1">
			</div>
		
			<!-- footer class to display legal message - sources and copyright statement -->
			<div class = "footer">
				<b><p style = "color: black; font-size: 2vw; margin: 1vw 0vw 0vw 1vw;">Footer</p></b>
			</div>

		</div>
							
	</body>

<!-- HTML ends here -->
</html>
