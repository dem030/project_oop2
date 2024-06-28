<?php
session_start();

if(isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  include("connect.php"); // Assuming your connection details are in a separate file

  $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
  
  if($row=mysqli_fetch_array($query)){
    $firstName = $row['nome'];
    $lastName = $row['cognome'];
    $email = $row['email'];
    $codice_conto = $row['codice_conto'];
  }
}


?>
