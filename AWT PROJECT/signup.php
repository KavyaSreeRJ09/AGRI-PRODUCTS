<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <title>Zaisa</title>
    </head>
        <?php
            // Connect to the database
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"dbname");
            $username=$_POST['name'];
            $pass=$_POST['password'];
            $mail=$_POST['email'];
            $query = "SELECT * FROM signup where name='$username'";
            $result = mysqli_query($connect,$query); 
            $row = mysqli_fetch_array($result);  
            if($row["name"]==$username && $row["email"]==$mail && $row["password"]==$pass)
                include("signlog.html");
            else
            {                
                $sql="INSERT INTO signup(name, email, password) VALUES('$username','$mail','$pass')";
                if (mysqli_query($connect,$sql))
                    include("index1.html");                          
            }   
            mysqli_close($connect);          
        ?>            
        
    </body>    
</html>
