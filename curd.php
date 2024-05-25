

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exam Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <form method="post" action="operation.php">
  <div class="container mt-5">
    <h1>Exam Registration</h1>
      <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="First_Name" required>
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="Last_Name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="Email_Address" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="examname" class="form-label">Exam Name</label>
        <select class="form-select" id="examName"  name="Exam_Name" required>
          <option value="">Select Exam</option>
          <option value="math">Math</option>
          <option value="science">Science</option>
          <option value="history">History</option>
          </select>
      </div>
      <div class="mb-3">
        <label for="studentID" class="form-label">Student ID</label>
        <input type="text" class="form-control" id="studentId" name="student_ID" required>
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="submit"> 
      
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgysOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>