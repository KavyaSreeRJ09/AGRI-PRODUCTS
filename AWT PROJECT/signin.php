<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "dbname";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("connection failed");
}
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "dbname";
$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	password = '".$password."'");
$row = mysqli_fetch_array($sql);
if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
		window.location.href="index1.html";
	</script>	
	<?php
}
else{
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}
?>