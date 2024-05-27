<?php
include 'insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="curd.php" class="text-light">Add user</a>
        </button>
        <table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">sno</th>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
      <th scope="col">Email_Address</th>
      <th scope="col">Exam_Name</th>
      <th scope="col">Student_ID</th>
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
        echo ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$Email.'</td>
        <td>'.$examname.'</td>
        <td>'.$studentID.'</td>
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