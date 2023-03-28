<html>
<head>
<title>SWIGGY</title>
</head>
<body>
<table border="1"><center><tr>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlOPob9_Ple-Yvj3tFQkj9Snb3n5evlbsVZQ&usqp=CAU"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2cHKkDVJ67yjQoRqG-RwVxGLNR6KMOA2XeA&usqp=CAU"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqUWwbdSPAP3qsZ7nurr6DbHNV7QDz2XYqUQ&usqp=CAU"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJ0c3Gv9z6aYbV3LXo3oRd4Ienz8gXbyi57g&usqp=CAU"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3PSQbr_IdwFlnNdYMKWNv1tFooqNo3mNLuw&usqp=CAU"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR0tHsosTGtMTvT7T5BK4PmfCX1PLhvW7LfA&usqp=CAU"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center></tr>
<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"display");
$query = "SELECT * FROM product5";
$result=mysqli_query($connecto,$query);
$i=0;
?>
<table border="5" width="900" height="50px" ><center>
<tr bgcolor="" height="50">
<th>BIRYANI</th>
<th>PRICE</th>
<th>GRAVY</th>
<th>PRICE</th>
<th>DRY</th>
<th>PRICE</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{    
$a[$i]=$row["briyani"];
$b[$i]=$row["bprice"];
$c[$i]=$row["gravy"];
$d[$i]=$row["gprice"];
$e[$i]=$row["dry"];
$f[$i]=$row["dprice"];
print("<tr><th><h2>$a[$i]</th>");
print("<th><h2>$b[$i]</th>");
print("<th><h2>$c[$i]</th>");
print("<th><h2>$d[$i]</th>");
print("<th><h2>$e[$i]</th>");
print("<th><h2>$f[$i]</th><tr></center>");
print("<br>");
$i=$i+1;
}
?>
<table><br><br><br>
<br><br><button type="button"><a href="frames2.html" target="frames2">BACK</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button"><a href="quantity thalapakatti.php" target="frames2">ORDER</a></button> 
</body>
</html>




$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "dbname";
$sql = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$password')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>