<?php 
$name=$_GET["username"];
$password=$_GET["pwd"];
$msg = '';  
	if (empty($name)) {
     $nameErr = "Name is required";
	} else {
     $name = test_input($name);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
	if (empty($password)) {
     $pwdErr = "Name is required";
	}
   
   //echo $name;
  // echo $password;
   
  // Create connection
$conn = mysqli_connect("localhost", "root", "", "aquariamdb");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "\nSuccess";

$sql = "SELECT username,password FROM users where username='".$name."' and password='".$password."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	
     header("Location: index-logout.html");
    
    }
	else{
		$msg = 'Error. No match found !';
		 header("Location: index.html");
		 	}


mysqli_close($conn);

   
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

