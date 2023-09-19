<?php
$servername = "sql205.infinityfree.com";
$username = "if0_35057309";
$password = "yQ1kSf7Vqvl";
$db = "if0_35057309_portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if (isset($_POST['Submit'])) {
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  $Message = $_POST['Message'];

$data = "INSERT INTO `portfolio`(`Name`, `Email`, `Phone`, `Message`) 
VALUES ('$Name','$Email','$Phone','$Message')";

$result = mysqli_query($conn,$data);
if($result ==TRUE){
  echo "New record successfully added";
}else{
  echo "Error".$data."<br>"  .$conn->error;
}
}
