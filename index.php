<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
</head>
<body>
	<h1>Sign Up</h1>
	<form action="insert.php" method="post" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		
		<label for="gender">Gender:</label>
		<select id="gender" name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select><br><br>
		
		<label for="remember_me">Remember Me:</label>
		<input type="checkbox" id="remember_me" name="remember_me"><br><br>
		
		<label for="image">Upload Image (max size 1MB):</label>
		<input type="file" id="image" name="image" accept="image/*" required><br><br>
		
		<input type="submit" value="Sign Up">
	</form>
</body>
</html>