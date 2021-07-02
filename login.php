<?php
$connect=mysqli_connect("localhost","root","","dhars") or die("Connection is failed");
if(isset($_POST['login']))
{
    $email=$_POST['emailid'];
    $password1=$_POST['password'];
    $query = "select firstname,email,bloodgrp from data where email ='$email' and password ='$password1' ";
    $result=mysqli_query($connect,$query);
    $row=mysqli_fetch_array($result);
    $firstname=$row[0];
    $emailid=$row[1];
    $bloodgrp=$row[2];
    $count=mysqli_num_rows($result);
    if($count>0 ){
       echo "<h1>Logged in successfully and your blood group is shown below</h1>";
       echo "<br>";
       echo $firstname;
       echo "----->";
       echo $emailid;
       echo "----->";
       echo $bloodgrp;
      
    
    }
    else
      echo "Failed to login...:( Incorrect email or password";

}
?>