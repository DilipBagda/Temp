<?php

if( isset($_POST['name']) ){

	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "mydb";

	$conn = mysqli_connect($server,$username,$pass,$db);

	if(!$conn)
		die("Connection Error :".mysqli_connect_error());

	$name = $_POST['name'];
	$age= $_POST['age'];
	$gender= $_POST['gender'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$addr= $_POST['addr'];
	$country= $_POST['country'];


	$sql ="INSERT INTO `mytable` (`name`, `age`, `gender`, `email`, `phone`, `addr`, `country`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$addr', '$country')";

	mysqli_query($conn,$sql) or die("Error..........");

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My From</title>
</head>
<body>

	<div class="container">
		
		<h2>My Form</h2>

		<form action="index.php" method="post">
			
			Enter Name: <input type="text" name="name" id="name" placeholder="Enter your name" >  <br> <br>

			Enter Age:  <input type="number" name="age" id="name" placeholder="Enter your age">   <br> <br>

			Select Gender: <input type="radio" name="gender" id="male" value="male"> Male
			               <input type="radio" name="gender" id="female" value="female"> female <br> <br>
			Enter Email: <input type="email" name="email" id="email" placeholder="Enter your Email">  <br> <br>

			Enter Phone: <input type="number" name="phone" id="phone" placeholder="Enter Your Number"> <br> <br>

			Enter Address: <textarea name="addr" rows="5" cols="10" placeholder="Enter your Address"></textarea> <br><br>

			Select Country: <select name="country" id="country">
				
				<option value="india">india</option>
				<option value="pakistan">pakistan</option>
				<option value="china">china</option>
				<option value="other">other</option>
			</select> <br><br>

			<button >Submit</button>

		</form>

	</div>

</body>
</html>