<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$educatıon = $_POST['educatıon'];
	$universityName = $_POST['universityName'];
	$department = $_POST['department'];
	$graduate = $_POST['graduate'];
	$city = $_POST['city'];
	$work = $_POST['work'];
	$job = $_POST['job'];
	$levelEnglısh = $_POST['levelEnglısh'];
	$field = $_POST['field'];
	$goal = $_POST['goal'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration (firstName, lastName, gender, email, password, number, educatıon, universityName, department, graduate, city, work, job, levelEnglısh, field, goal) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssisssissssss", $firstName, $lastName, $gender, $email, $password, $number, $educatıon, $universityName, $department, $graduate, $city, $work, $job, $levelEnglısh, $field, $goal);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>