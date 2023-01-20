<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset ="utf-8" />
		<title>Comments - RIT Local Interests</title>
		<link rel="stylesheet" type="text/css" href="assets/style.css" />
		<script src="assets/scripts.js"></script>
		<script type="text/javascript">
			function validate() {
				//check for inputs having data
				if (document.getElementById('name').value=='') {
					document.getElementById('name').style.borderColor="red";
					return false;
				} else if (document.getElementById('comment').value=='Your Comment Here' || document.getElementById('comment').value=='') {
					document.getElementById('comment').style.borderColor="red";
					return false;
				} else {
					return true;
				}
			}
		</script>
	</head>

	<body>
	<!-- page heading and navigation php include -->
		<?php
			include "assets/inc/header.php";
		?>
	
	<!-- page content -->
	<div id="content">
		<h2>Leave a comment about the page!</h2>
		
		<p>Note that any comments will be published publically. Don't post any personal information or offensive material.</p>
		
		<!-- Submission Form -->
		<form action="comments.php" method="get" onsubmit="return validate()">
			Name: <input id="name" type="text" name="usn" /> <br /><br />
			Comment:<br />
			<textarea id="comment" name="comment" rows="4" cols="60">Your Comment Here</textarea> <br /><br />
			<input type="submit" value="Submit!" />
		</form>
		
		<!-- Previous Comments, pulled from database -->
		<h3>Comments</h3>
		
		<?php
			//get connection
			$username = "cjo3760";
			$pass = "nya~tomato";
			$conn = new mysqli(localhost, $username, $pass, cjo3760);
			
			//put data in
			//if new data
			if($_GET['usn']!= '' && $_GET['comment']!='Your Comment Here' && $_GET['comment']!='') {
				//prepare and bind statement
				$stmt = $conn->prepare('INSERT INTO stored_comments (name, comment) VALUES (?, ?)');
				$stmt->bind_param('ss', $_GET['usn'], $_GET['comment']);
				
				//execute
				$stmt->execute();
				$stmt->close();
			}
			
			//get data out and print
			$result = $conn->query('SELECT name, comment FROM stored_comments');
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "Name: " . $row['name'] . "<br />Comment:<br />" .$row['comment'] . "<br /><br />";
				}
			} else {
				echo "No comments";
			}
		?>
	</div>
	
	<!-- footer php include -->
	<?php
		include "assets/inc/footer.php";
	?>
	</body>

</html>