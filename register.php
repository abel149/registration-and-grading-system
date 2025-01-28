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

    <!-- CSS -->
    <link rel="stylesheet" href="register.css">

    <link rel="icon" href="image/stmary.png">

</head>
<style>
    .container-fluid{
    padding: 2% 5% 2% 5%;
}
#Navigation{
    background-color: #4CAF50;
    color: white;
}

.logo{
    width: 100px;
    height: 150px;
    margin-right: 20px;
    padding-top: 5px;   
}

.navbar-brand{
    font-family: "ubuntu";
   font-size: 2rem;
   margin-right: 5%;
   padding-top: 2rem;
   color: white;
}
.log{
    font-weight: bold;
}
.d-flex{
    margin-left: 20px;
}
.nav-bnt{
    margin-right: 3px;
    color: white;
}



body {
    background-color: #f4f6f9;
}
.header {
    color: black;
    padding: 30px 0;
    text-align: center;
    font-family: ubuntu;
}
.container {
    margin-top: 30px;
}
.form-container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    margin-right: 10px;
}
.table-container {
    margin-top: 30px;
}
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem;
   
}
</style>

<body>
    <section id="Navigation">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <img class="logo" src="image/stmary.png" alt="Saint Mary's logo">
                <a class="navbar-brand" style="color: white;" href="#">
                    Sanit Mary's University
                    <p class="brand-amharic">ቅድስት ማርያም ዩኒቨርሲቲ</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" href="#studentRegister">Student Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" href="#">Update Student's Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link log" href="includes/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

    </section>
    <section id="studentRegister">
        <!-- Header Section -->
        <div class="header">
            <h1>Student Register Dashboard</h1>
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="form-container col-lg-3">
                    <h4>Fill the form to register</h4>
                    <form id="registerForm" action="includes/register.inc.php" method="POST">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" name="id" required>
                        </div>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" required>
                        </div>
                        <div class="mb-3">
                            <label for="sec" class="form-label">Section</label>
                            <input type="text" class="form-control" id="sec" name="sec" required>
                        </div>
                        <div class="mb-3">
                            <label for="dep" class="form-label">Department</label>
                            <input type="text" class="form-control" id="dep" name="dep" required>
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" class="form-control" id="year" name="year" required>
                        </div>
                        <div class="mb-3">
                            <label for="semi" class="form-label">Semister</label>
                            <input type="text" class="form-control" id="semi" name="semi" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="pass" required>
                        </div>
                        <button type="submit" class="btn btn-success" name="sub">Sign Up</button>

                    </form>
                </div>
                <div class="table-container col-lg-6">
                    <h3 class="mt-4">Registered Student</h3>
                    <table class="table table-striped table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Section</th>
                                <th>Department</th>
                                <th>Year</th>
                                <th>Semister</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody id="registrarTableBody">
                            <!-- Dynamic teacher data will appear here -->
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success" name="del">Delete</button>
                </div>
            </div>

    </section>
    <footer>
      <p>&copy; 2024 Registrar Portal | All Rights Reserved</p>
    </footer>
</body>
</html>

















