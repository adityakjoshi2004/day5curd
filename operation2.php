<?php
include 'insert.php';
if(isset($_POST['submit'])){
  
    $sno=$_POST['sno'];
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    $sql = "INSERT INTO `users` (`sno`, `username`, `password`)
    VALUES ('$sno', '$username', '$password')";
   // print_r($sql);
    //die();
    $result=mysqli_query($con,$sql);
    if($result){
     echo "SIGN UP SUCCESSFUL !";
    }else{
      die(mysqli_error($con));
    }
    
  }
?>