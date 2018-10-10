<!-- Tiffany Ellis -->
<!-- March 19,2017 -->
<!-- Comment -->

<?php
	$path = './';
	$page = 'Comment';
	include $path.'assets/inc/header.php';
?>

	<header class = "comment header_fade ">
		<h1> Comments</h1>
	</header>
	
	<div class = "head">
			<h2 >Leave a thought! Tell us what you think!</h2>
	</div>
	
	<form id= "commentForm" action="comment.php" method="post" onsubmit = "return validateForm();">		
		<label for="name"> Name:</label><br>
		<input type="text" id="name" name="name" placeholder= "Name" /><br>
		<label for="com">Comment:</label><br>
		<input  type="text" id="com" name="com" placeholder= "Type here..." /><br>
		<input  type="submit" name = "submit" value="Add Comment"/>
	</form>
	
	<br>
	<hr>
	<h2> Comments </h2>
	
<?php 
	
	/**
 	* Connect to the database.
 	*/
	
 	$path = '../';
	$page = 'index';
	include $path.'../dbConn.php';
 	
 	if($conn)
 	{
 		
 		if( $_SESSION['submit'] == $_POST['submit'] && isset($_SESSION['submit']))
 		{
    		//user double submitted
		}
		else 
		{
    	     if( $_POST["name"] != "" || $_POST["name"] != null)
 			{
 				// prepare and bind
				$stmt = $conn->prepare("INSERT INTO Project2_Comments (name, comment) VALUES (?, ?)");
				$stmt->bind_param("ss", $_POST["name"], $_POST["com"]);
			
				//execute
				$stmt->execute();
				$stmt->close();
 			}
 			// grab data in database
 			$result = $conn->query("SELECT * FROM Project2_Comments ORDER BY Id");
 			//
 			if($result)
 			{
 				echo "<table><tr><th>Name</th><th>Comments</th></tr>";
 				 /* fetch associative array */
    			while ($row = $result->fetch_assoc()) 
    			{
        			echo "<tr><td>".$row["Name"]."</td><td>".$row["Comment"]. "</td></tr>";
    
 				}
 				echo "</table>";
 			}
		} 
 		
 	}
 	
 	include './assets/inc/footer.php';
?>