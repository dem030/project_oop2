<?php
session_start();

if(isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  include("connect.php"); // Assuming your connection details are in a separate file

  $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
  
  if($row=mysqli_fetch_array($query)){
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $fullName = $firstName . ' ' . $lastName;
  } else {
    // Handle case where user info is not found (optional)
  }
} else {
  // Handle case where no session is available (optional)
}

echo json_encode(array("fullName" => $fullName)); // Encode user info as JSON

?>
