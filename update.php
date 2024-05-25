<?php
include 'insert.php';

// Fetch the update ID
$sno = $_GET['updateid'];

// Fetch data from the database for the given ID
$sql = "SELECT * FROM student_info WHERE `sno` = $sno";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Assign values to variables
$firstname = $row['First_name'];
$lastname = $row['Last_name'];
$email = $row['Email'];
$examname = $row['exam_name'];
$studentID = $row['student_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exam Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h1>Exam Registration</h1>
    <hr>
    <form method="POST" action="delete.php?updateid=<?= $sno ?>">

      <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstname" required value="<?php echo $firstname; ?>">
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastname" required value="<?php echo $lastname; ?>">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required value="<?php echo $email; ?>">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="examname" class="form-label">Exam Name</label>
        <select class="form-select" id="examName" name="examname" required>
          <option value="">Select Exam</option>
          <option value="math" <?php if($examname == "math") echo "selected"; ?>>Math</option>
          <option value="science" <?php if($examname == "science") echo "selected"; ?>>Science</option>
          <option value="history" <?php if($examname == "history") echo "selected"; ?>>History</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="studentID" class="form-label">Student ID</label>
        <input type="text" class="form-control" id="studentId" name="studentID" required value="<?php echo $studentID; ?>">
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="submit"> 
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgysOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
