<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrator Portal</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="adminstyle.css">

</head>

<body>

  <header>
    <h1>Welcome to the Administrator Portal</h1>
    <p>Manage all aspects of the system here</p>
  </header>

  <div class="container-fluid">
    <div class="row g-4">

      <!-- Student Portal Section -->
      <div class="card col-lg-6 mb-3">
        <h3 class="card-header">Student</h3>
        <div class="card-body">
          <p class="card-text">View student information and records</p>
          <a href="#" class="btn btn-success">View Student</a>
        </div>
      </div>

      <!-- Teacher Portal Section -->

      <div class="card col-lg-6 mb-3">
        <h3 class="card-header">Teacher</h3>
        <div class="card-body">
          <p class="card-text">View and manage teacher information</p>
          <a href="adminTeachers.php" class="btn btn-success">View Teacher</a>
        </div>
      </div>

      <!-- Registrar Portal Section -->

      <div class="card col-lg-6 mb-3">
        <h3 class="card-header">Registrar</h3>
        <div class="card-body">
          <p class="card-text">Access registrar functionalities and records</p>
          <a href="#" class="btn btn-success">View Registrar</a>
        </div>
      </div>

      <!-- Edit Results Section -->

      <div class="card col-lg-6 mb-3">
        <h3 class="card-header">Edit result</h3>
        <div class="card-body">
          <p class="card-text">Edit student exam results and grades</p>
          <a href="#" class="btn btn-success">Edit Result</a>
        </div>
      </div>

      <!-- View Departments Section -->\

      <div class="card">
        <h3 class="card-header">View Departments</h3>
        <div class="card-body">
          <p class="card-text">View and manage all departments in the institution</p>
          <a href="#" class="btn btn-success">View Department</a>
        </div>
      </div>

    </div>
  </div>

  <div class="logout-button">
    <a href="includes/logout.php" class="btn btn-success">Logout</a>
  </div>

  <footer>
    <p>&copy; 2024 Administrator Portal | All Rights Reserved</p>
  </footer>

</body>

</html>