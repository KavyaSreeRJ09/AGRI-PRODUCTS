<html>
<head>
</head>
<body>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"dbname");

// Get the submitted form control data values 
$name = $_GET['a'];
$mail=$_GET['b'];
$feed=$_GET['c'];
$sql="INSERT INTO feedback (name, mail,feed) VALUES ('$name','$mail','$feed')";
if (mysqli_query($connect,$sql))
    Header("Location:index1.html");
mysqli_close($connect)
?>
</body>
</html>
