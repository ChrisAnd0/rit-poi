<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>About - RIT Local Interests</title>
		<link rel="stylesheet" type="text/css" href="assets/style.css" />
		<script src="assets/scripts.js"></script>
	</head>

	<body>
		<!--Include Page heading and nav-->
		<?php
			include "assets/inc/header.php";
		?>
		
		<!--Page content-->
		<div id="content">
			<h2>About</h2>
			
			<p>This site was created for ISTE 240 Web and Mobile II, Spring 2017, Instructor Dan Bogaard.</p>
			
			<p>The page focuses on RIT as my location since my actual hometown is a very small, rather uninteresting rural area which I struggled to come up with 10 relevant locations for content to write about, and while I have traveled a lot, I do not know enough about any given location or area to feel comfortable writing about it. As a result, I decided to write about my current area of residence, being Henrietta, RIT, and the surrounding areas.</p>
			
			<p>The site satisfies the grading conditions:</p>
			<ul>
				<li>Design techniques: The site is very cleanly designed, with simple, clean, and relevant colors and clear lines.</li>
				<li>Information is laid out cleanly on each page.</li>
				<li>Content is relevant and (hopefully) interesting and unique.</li>
				<li>Navigation is simple and easy to get around. Sites do not go more than 2 levels deep for the sake of simplicity. Pages are well and accurately named.</li>
				<li>Pages built using HTML5 and CSS3. Semantic tags are used. Pages are positioned with various CSS rules, adjusted for media queries, and the navigation bar uses display: flex to display properly on desktop.</li>
				<li>Images used are my own.</li>
			</ul>
			
			<p>The final site satisfies the following additional grading conditions:</p>
			<ul>
				<li>All headers and footers now use php includes.</li>
				<li>Main navigation now uses JavaScript functions to control the CSS and update on mouseover/mouseout.</li>
				<li>Comments page added, uses MySQLi to connect to a database. JavaScript used for form validation, prepared statements used to prevent SQL injection.</li>
			</ul>
		</div>
		
	<!-- footer php include -->
	<?php
		include "assets/inc/footer.php";
	?>
	</body>
</html>