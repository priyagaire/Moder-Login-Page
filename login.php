<?php 

//declaring a variable with the name given in name field of input
$username=$_POST['username'];
$password=$_POST['password'];

//preventing sql injection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

//database connection
mysql_connect("localhost","root",""); //mysql is deprecated
mysql_select_db("login");


//query fire
$result=mysql_query("select * from users where username='$username' and password='$password' ")
                     or die("Failed to reach the database" .mysql_error());

$row=mysql_fetch_array($result);

if ($row['username']==$username && $row['password']==$password && ("" !== $username || "" !== $password)) {
	# code...
	//
	 echo "<script>alert('Logged in Successfully!!')</script>"; 
      echo " <h1 align='center'>Logged in Successfuly!! <br> Welcome  ".$row['username'] .'</h1>' ;

} else {
	# code...
	echo "<script>alert('Unable to login, please check your username and password')</script>";
	echo "Error in loggin in";
}



 ?>