<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <style>
    .content-container{
      margin-top: 200px;
    }
  </style>

<nav class="navbar navbar-dark bg-dark fixed-top mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <div class="navbar-text">
      <?php  
        if (isset($_SESSION['username'])) { 
            echo 'Welcome, ' . $_SESSION['username']; 
        } 
        ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
             <div class="offcanvas-body">
             <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
             <li class="nav-item">
             <!--<a class="nav-link active  bg-dark" aria-current="page" href="#">Home</a>-->
             <button class="btn btn-primary nav-link active  bg-dark"><a href="curd.php" class="text-light">Add user</a>
             </button>
             </li>
             <li class="nav-item">
             <button class="btn btn-primary nav-link active  bg-dark"><a href="logout.php" class="text-light">logout</a>
             </button>
             </li>
             
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
    <div class="container content-container"> 
      <h1>STUDENT INFORMATION</h1>
        <table class="table table-bordered mt-5">
  <thead>
    <tr>
    <th scope="col">sno</th>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
      <th scope="col">Email_Address</th>
      <th scope="col">Exam_Name</th>
      <th scope="col">Student_ID</th>
      <th scope="col">timestamp</th>
      <th scope="col">operation</th>
<!-- up -->
      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from student_info";
    $result=mysqli_query($con,$sql);
    if($result){
      $i=1;
       while($row=mysqli_fetch_assoc($result)){
        $sno=$row['sno'];
        $firstname=$row['First_name'];
        $lastname=$row['Last_name'];
        $Email=$row['Email'];
        $examname=$row['exam_name'];
        $studentID=$row['student_id'];
        $timestamp=$row['time'];

        echo ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$Email.'</td>
        <td>'.$examname.'</td>
        <td>'.$studentID.'</td>
        <td>'.$timestamp.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$sno.'" class="text-light">update</a></button>
       <button class="btn btn-danger"><a href="delete.php? deleteid='.$sno.'" class="text-light">delete</a></button>
    </td>
      </tr>';
 $i++;
       }
       
    }
    ?>  
  </tbody>
</table>

</div>
</body>
</html>
