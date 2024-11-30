<?php

		// servername => localhost now rds endpoint
		// username => root now your db username 
		// password => empty now your oen password
		// database name => Your database name
		//$conn = mysqli_connect("bowhotelgroup2database.czptxhzjxjrt.us-east-1.rds.amazonaws.com", "admin", "bowhotelgroup2", "bow_hotel_group2");
		
		// Check connection
		/* if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input) */
		$cName = $_REQUEST['name'];
		$cEmail = $_REQUEST['email'];
		$cMessage = $_REQUEST['message'];

     /*   $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $cName, $cEmail, $cMessage);
		// Execute the prepared statement
if ($stmt->execute()) { */
    echo "<h3>Data stored in the Bow hotel database successfully.</h3>";
    echo nl2br("\n$cName\n$cEmail\n$cMessage");
/*} else {
    echo "ERROR: Could not execute query: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
mysqli_close($conn); */
?>
