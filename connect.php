<?php
  
  $conn = new mysqli("localhost","root","","dhars");
if(!$conn){
die("From is not connected to the database".mysqli_error());
}
else{
if(isset($_POST['register']))
{
  $firstname = mysqli_real_escape_string($conn,$_POST['FIRSTNAME']);
  $lastname = mysqli_real_escape_string($conn,$_POST['LASTNAME']) ;
  $fathername= mysqli_real_escape_string($conn,$_POST['FATHERNAME']) ;
  $emailid =mysqli_real_escape_string($conn,$_POST['EMAILID']) ;
  $dateofbirth = mysqli_real_escape_string($conn,$_POST['date']) ;
  $gender = mysqli_real_escape_string($conn,$_POST['gender']) ;
  $bloodgroup = mysqli_real_escape_string($conn,$_POST['BLOODGROUP']) ;
  $password = mysqli_real_escape_string($conn,$_POST['password']) ;
  $address = mysqli_real_escape_string($conn,$_POST['ADDRESS']) ;
  $sql = "insert into data(firstname,lastname,fathername,email,dob,gender,bloodgrp,password,address) values('$firstname','$lastname','$fathername','$emailid','$dateofbirth','$gender','$bloodgroup','$password','$address')";
  $result = mysqli_query($conn,$sql);
  if(!$result)
  {
      echo "not registered";
  }
  else{
      echo " Registered Successfully";
  }
  mysqli_close($conn);
}

}
?>
