<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saint Mary's University</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!--Css-->
    <link rel="stylesheet" href="">

    <link rel="icon" href="image/stmary.png">

</head>
<style>
  header {
    font-family: montserrat;
    background-color: #4CAF50;
    color: white;
    padding: 40px;
    text-align: center;
}
h2{
    text-align: center;
}
.login-container {
     border-radius: 8px;
     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
     padding: 40px;
     max-width: 400px;
     width: 100%;
     margin-top: 80px;
     margin-bottom: 20px;
 }
 .depheader{
    margin-top: 100px;
    
 }
 .card{
    font-family: ubuntu;
    padding: 10px;
}
.card:hover{
    transform: scale(1.005);
}
.card-header,.card-body{
    text-align: center;
}
.logout-button{
  text-align:center;
  padding:1rem 0 2rem 0;
}
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem;
   
}
.deplist{
    padding: 50px;
}

</style>

<body>
<section id="heading">
    <header>
    <h1>WELCOME TO OUR DEPARTMENT LISTS</h1>
    </header>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                        <div class="login-container bg-light">
                        <h4>ADDING COURSES</h4>
                        <form action="" method="">
                            <!-- Role Selection -->
                            <div class="mb-3">
                                <label for="role" class="form-label">In which department</label>
                                <select class="form-select" name="depadd" id="depadd" required>
                                    <option value="acc">Accounting and Fianace</option>
                                    <option value="cs">Computer Science</option>
                                    <option value="tr">Managment</option>
                                    <option value="mr">Marketing</option>
                                </select>
                            </div>

                            <!-- coursename -->
                            <div class="mb-3">
                                <label for="coname" class="form-label">Course Name</label>
                                <input type="text" name="coname" class="form-control" id="coname" placeholder="Course name" required>
                            </div>

                            <!-- coursecode -->
                            <div class="mb-3">
                                <label for="cocode" class="form-label">Course Code</label>
                                <input type="text" name="cocode" class="form-control" id="cocode" placeholder="Course Code" required>
                            </div>

                            <!-- Adding Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light" name="submit">Add</button>
                            </div>
                        </form>
                        </div>
                </div>

                <div class="col-lg-6">
                <div class="login-container bg-light">
                        <h4>ADDING NEW DEPARTMENT</h4>
                        <form action="" method="">
                           <!-- Depname -->
                            <div class="mb-3">
                                <label for="depname" class="form-label">Department Name</label>
                                <input type="text" name="newdep" class="form-control" id="newdep" placeholder="Enter New Department Name" required>
                            </div>

                            <div class="mb-3">
                                <label for="des" class="form-label">Add Description</label>
                                <input type="text" name="des" class="form-control" id="des" placeholder="Add Description" required>
                            </div>

                            <!-- Adding Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light" name="submit">Add New Department</button>
                            </div>
                        </form>
                        </div>
                </div>

            </div>
    </div>
</section>

<section id="dep">
    <header class="depheader">
    <h1>AVAILIABLE COURSES</h1>
    </header>
    <div class="container deplist">
    <div class="row g-4">

      <!-- Accounting Section -->
      <div class="card col-lg-6 mb-3">
        <h3 class="card-header">Accounting and Finance</h3>
        <div class="card-body">
          <a href="#" class="btn btn-success">View Course List</a>
        </div>
      </div>

      <!-- Computer Science Section -->

      <div class="card col-lg-6 mb-3">
        <h3 class="card-header">Computer Science</h3>
        <div class="card-body">
          <a href="" class="btn btn-success">View Course List</a>
        </div>
      </div>

      <!-- Marketing Section -->

      <div class="card col-lg-6 mb-3">
        <h3 class="card-header">Marketing</h3>
        <div class="card-body">
          <a href="#" class="btn btn-success">View Course List</a>
        </div>
      </div>

      <!-- Managment Section -->

      <div class="card col-lg-6 mb-3">
        <h3 class="card-header">Managment</h3>
        <div class="card-body">
          <a href="#" class="btn btn-success">View Course List</a>
        </div>
      </div>
      
      <div class="card col-lg-6 mb-3">
        <h3 class="card-header"></h3>
        <div class="card-body">
          <a href="#" class="btn btn-success"></a>
        </div>
      </div>

      </div>
      </div>
      <div class="logout-button">
                <a href="includes/logout.php" class="btn btn-success log">Logout</a>
            </div>

</section>
     
<footer>
    <p>&copy; 2024 Department Portal | All Rights Reserved</p>
  </footer>  

 
    

</body>

</html>