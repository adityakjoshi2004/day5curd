<?php
// print_r($_GET['updateid']);
// die();
include 'insert.php';

if(isset($_GET['updateid'])){
    $sno=$_GET['updateid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $examname = $_POST['examname'];
    $studentID = $_POST['studentID'];
    // Update SQL query
    $sql = "UPDATE student_info SET `First_name`='$firstname', `Last_name`='$lastname', `Email`='$email', `Exam_name`='$examname', `student_ID`='$studentID' WHERE `sno`=$sno";
  
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
  }

if(isset($_GET['deleteid'])){
    $sno = $_GET['deleteid'];
    // Corrected the SQL query with backticks
    $sql = "DELETE FROM `student_info` WHERE `sno` = $sno";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo "deleted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>