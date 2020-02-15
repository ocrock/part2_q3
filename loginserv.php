<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("172.17.0.2", "sa", "password");
 //Selecting Database
 $db = mysqli_select_db($conn, "test");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
  // Redirecting to other page
	?> <p style="margin:20% 20% 20% 20%; font-size:200%">bienvenue <?php echo $user ?> </p>
<?php
 }
 else
 {
 header("Location: index.html");
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>
