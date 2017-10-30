<?php
  // Getting the required files
  require 'dbh.php';
// Removing escape character to prevent sql injection
$fname=mysqli_real_escape_string($conn,$_POST['first_name']);
$lname=mysqli_real_escape_string($conn,$_POST['last_name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$message=mysqli_real_escape_string($conn,$_POST['message']);
// Check if any parameters are not empty 
if (empty($fname) ||empty($lname) || empty($email) || empty($message)) {
  echo "values not input";
}
else {
  //Creating insert queru
  $sql= "INSERT into feedback(Firstname,Lastname,Email,Message) values ('$fname','$lname','$email','$message');";
  //Execute the query
  mysqli_query($conn,$sql);
  echo " successs";
  //Exit after data is inserted
  exit();
}
//phpmail is function used to send mail to respective users
phpmail($email,"feedback Successfull",THANK YOU FOR YOU FEEDbACK WE WILL GET WITH YOU,rathilvasani@gmail.com);

?>
