<?php
		try {
		// servername => localhost now rds endpoint
		// username => root now your db username 
		// password => empty now your oen password
		// database name => Your database name
		$conn = mysqli_connect("clcm3504-exam-geetha-rds.czptxhzjxjrt.us-east-1.rds.amazonaws.com", "admin", "Anvaysuni0914", "bow_hotel_clcm3504_cicd_geetha");
		
		// Check connection
		if($conn === false){
			throw new Exception("Connection failed: " . $conn->connect_error);
		}
		
		// Taking all 5 values from the form data(input)
		$cName = $_REQUEST['name'];
		$cEmail = $_REQUEST['email'];
		$cMessage = $_REQUEST['message'];

        $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $cName, $cEmail, $cMessage);
		// Execute the prepared statement
if ($stmt->execute()) {
    echo "<h3>Data stored in the Bow hotel database successfully.</h3>";
    echo nl2br("\n$cName\n$cEmail\n$cMessage");
} else {
        throw new Exception("ERROR: Could not execute query: " . $stmt->error);
    }

// Close statement and connection
$stmt->close();
mysqli_close($conn);
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "An error occurred while processing your request. Please try again later.";
}
?>
