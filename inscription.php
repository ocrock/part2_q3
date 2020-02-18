<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Registration</h1>
<form action="inscription.php" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Register" name="submit">
</form>
<!-- Error Message -->
<span><?php echo $error; ?></span>
</div>
<?php
$host = "172.17.0.2";
$userName = "sa";
$password = "password";
$dbName = "test";
// Create database connection
$conn = mysqli_connect($host, $userName, $password, $dbName);
// Check connection
if (!$conn) {
echo 'failed to connect';
die("Connection failed: " . $conn->connect_error);
}else{

	
}
$tableuser = "create table if not exists userpass(user varchar(40),
	pass varchar(40));";
if(mysqli_query($conn, $tableuser)){  
         
         } else {  
            
         }  
         
if(isset($_POST['user']) && isset($_POST['pass'])){
	$req = "INSERT INTO userpass (user, pass) VALUES('".$_POST['user']."','".$_POST['pass']."')";
if(mysqli_query($conn, $req)){
header('Location: index.html');
}else{
header('Location: inscription.php');
}
 	
}

mysqli_close($conn); 
?>
    </body>
</html>
