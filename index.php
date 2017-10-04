<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to Document Management System </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

</head>
<body>

<div class="container">
<img src="man.png" alt="logo">
	<form action="login.php" method="POST">
		<div class="form-input">
				<input type="text" name="username" placeholder="Username">
		</div>

		<div class="form-input">
				<input type="password" name="password" placeholder="Password">
		</div>

         <input type="submit" name="submit" value="LOGIN" class="btn-login"> <br>
         <a href="#" onclick="uFool()">Forgot Password</a>
	</form>
</div>
<script>
     
function uFool()
{
	alert("Really,How dumbass your are 😂😂  ?")
}

</script>
</body>
</html>