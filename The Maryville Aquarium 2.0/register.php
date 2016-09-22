<?php 
$name=$_GET["name"];
$username=$_GET["username"];
$password=$_GET["password"];
$email=$_GET["email"];
$firstname="a";
$lastname="a";
$street="a";
$city="a";
$zip=111;
$phone=111;


echo $username;
echo $name;
echo $password;
echo $email;


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
$conn = mysqli_connect("localhost", "root","", "aquariamdb");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "\nSuccess";

//$sql = 'INSERT INTO users VALUES("$username","$password","$firstname","$lastname","$street","$city",$zip,$phone,"$email")';
//$sql = "INSERT INTO users (username,password,firstname,email) VALUES('$username','$password','$firstname',null,null,null,null,null,'$email')";
$sql = "Insert into users values('$username','$password','$firstname','null','null','null',0,0,'$email')";
$result = mysqli_query($conn, $sql);


 header("Location: index.html");

mysqli_close($conn);

   
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

