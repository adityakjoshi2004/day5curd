<?php
include 'insert.php';
if(isset($_POST['submit'])){
  
    $sno=$_POST['sno'];
    $firstname=$_POST['First_Name'];
    $lastname=$_POST['Last_Name'];
    $Email=$_POST['Email_Address'];
    $examname=$_POST['Exam_Name'];
    $studentID=$_POST['student_ID'];
   
    $sql = "INSERT INTO `student_info` (`sno`, `First_name`, `Last_name`, `Email`, `Exam_name`, `student_ID`)
    VALUES ('$sno', '$firstname', '$lastname', '$Email', '$examname', '$studentID')";
   // print_r($sql);
    //die();
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:display.php');
    }else{
      die(mysqli_error($con));
    }
    
  }
?>