<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName = $_POST['nome'];
    $lastName = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $acc_id = $_POST['codice_conto'];
    //$password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(nome,cognome,email,password,codice_conto)
                       VALUES ('$firstName','$lastName','$email','$password', '$acc_id')";
            if($conn->query($insertQuery)==TRUE){
                header("location: ../login/index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   // $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>