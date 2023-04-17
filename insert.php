<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = new mysqli("localhost", "root", "", "data");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		

        
		
		// Performing insert query execution
		// Prepare an insert statement
		$sql = "INSERT INTO user (name,
		email,password,gender) VALUES (?, ?, ?, ?)";
 
         if($stmt = mysqli_prepare($conn, $sql)){
    
        mysqli_stmt_bind_param($stmt, "isss", $name, $email, $password ,$gender);
		
		 }
		
		mysqli_stmt_close($stmt);
		$str = "This is <i>italic</i> text.";  
        echo htmlspecialchars($str, ENT_QUOTES);
		 
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
