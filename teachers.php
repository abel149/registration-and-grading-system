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
    <link rel="stylesheet" href="adminTeacher.css">

    <link rel="icon" href="image/stmary.png">


    <style>
        .container-fluid {
            padding: 2% 5% 2% 5%;
        }

        #Navigation {
            background-color: #4CAF50;
            color: white;
            margin-bottom: 50px;
        }

        .logo {
            width: 100px;
            height: 150px;
            margin-right: 20px;
            padding-top: 5px;
        }

        .navbar-brand {
            font-family: "ubuntu";
            font-size: 2rem;
            margin-right: 5%;
            padding-top: 2rem;
            color: white;
        }

        .log {
            font-weight: bold;
        }

        .d-flex {
            margin-left: 20px;
        }

        .nav-bnt {
            margin-right: 3px;
            color: white;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 30px 0;
            text-align: center;
            font-family: ubuntu;
        }

        body {
            background-color: #f4f6f9;
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
            margin: auto;
            margin-bottom: 100px;
            
        }

        .table-container {
            margin-top: 30px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;

        }

        .table {
            border: 2px solid #ccc;

        }

        #sec {
            display: none;
        }

        #view {
            display: none;
        }
        .table-center{
  padding:2% 5% 2% 5%;
}
.welcome {
            
            color:black;
            padding: 20px;
            text-align: center;
        }
        .welcome h1 {
            margin: 0;
        }
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(134, 190, 116, 0.1);
            padding: 20px;
            text-align: center;
        }
        .card h3 {
            color:black;
        }
        .card a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color:rgb(105, 182, 105);
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .card a:hover {
            background-color: #0056b3;
        }
        .footer-home {
            background-color:rgb(105, 182, 105);
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

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
                            <a class="nav-bnt btn btn-light nav-link" aria-current="page" href="#">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" href="#"
                                onclick="
                                   document.getElementById('sec').style.display = 'block';
                                  document.getElementById('view').style.display = 'none';
                                   document.getElementById('teacher-home').style.display = 'none';
                                   document.getElementById('footer-home').style.display = 'block';
                                    " id="subbtn">Submit Grade</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" href="#"
                                onclick="
                                document.getElementById('sec').style.display = 'none';
                                    document.getElementById('view').style.display = 'block';
                                   document.getElementById('teacher-home').style.display = 'none';
                                
                                    " id="upbtn">View Student List</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link log" href="includes/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

    </section>
    <section id="teacher-home">
        <div class="container-fluid">
<!-- Header Section -->
<div class="welcome">
        <h1>Welcome to the University Teacher Portal</h1>
        <p>Manage your courses, assignments, and student performance</p>
    </div>

    <!-- Dashboard Section -->
    <div class="dashboard">
        <!-- Course Management Card -->
        <div class="card">
            <h4>📚 Manage Courses</h4>
            <p>View and manage your courses</p>
            <a href="#">Go to Courses</a>
        </div>

        <!-- Assignment Grading Card -->
        <div class="card">
            <h4>📝 Grade Assignments</h4>
            <p>Grade and review student assignments</p>
            <a href="#">Go to Grading</a>
        </div>

        <!-- Student Performance Card -->
        <div class="card">
            <h4>📊 Student Performance</h4>
            <p>Track and analyze student progress</p>
            <a href="#">View Performance</a>
        </div>

        <!-- Exam Scheduling Card -->
        <div class="card">
            <h4>📅 Schedule Exams</h4>
            <p>Set and manage exam schedules</p>
            <a href="#">Schedule Exam</a>
        </div>

        <!-- Communication Card -->
        <div class="card">
            <h4>💬 Communication</h4>
            <p>Send messages to students</p>
            <a href="#">Send Message</a>
        </div>

        <!-- Resources Card -->
        <div class="card">
            <h4>🔗 Resources</h4>
            <p>Access teaching resources and materials</p>
            <a href="#">View Resources</a>
        </div>
    </div>

    
        </div>
        <!-- Footer Section -->
    <footer class="footer-home">
        <p>&copy; 2025 University Teacher Portal</p>
    </footer>
 

    </section>
    
    <div id="view">
        <?php

        include 'classes/dbh.class.php';
        include 'classes/gradeM.class.php';
        include 'classes/gradeC.class.php';
        $grade = new Grade();
        $result = $grade->getstudentresult();



        ?>
        <div class="table-center">
        <table class="table table-striped table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First-Name</th>
                            <th>Last-Name</th>
                            <th>Section</th>
                            <th>Course-Code</th>
                            <th>Test-1</th>
                            <th>Assignment</th>
                            <th>Mid</th>
                            <th>Final</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody id="registrarTableBody">
                        
                        <?php foreach ($result as $row) { ?>

                            
                            <form action="includes/gradeV.inc.php" method="POST">
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['fname']?></td>
                                    <td><?php echo $row['lname']?></td>
                                    <td><?php echo $row['sec']?></td>
                                    <td><?php echo $row['corsecode']?></td>
                                    <td><?php echo $row['test1']?></td>
                                    <td><?php echo $row['assignment']?></td>
                                    <td><?php echo $row['mid']?></td>
                                    <td><?php echo $row['final']?></td>
                                    <td></td>
                                </tr>

                            <?php  } ?>
                    </tbody>
                </table>
       
        </div>
        
    </div>


    <div id="sec">

        <div class="form-container col-lg-3">
            <h4>Submit Grades To...</h4>
            <form id="registerForm" method="POST">

                <div class="mb-3">
                    <label for="sec" class="form-label">Enter Section</label>
                    <input type="text" class="form-control" name="sec" required>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Enter Year</label>
                    <input type="text" class="form-control" id="year" name="year" required>
                </div>
                <div class="mb-3">
                    <label for="semi" class="form-label">Enter Semister</label>
                    <input type="text" class="form-control" id="semi" name="semi" required>
                </div>
                <button type="submit" class="btn btn-success" name="sub" style={text-align:center;}>OKAY</button>

            </form>
        </div>
        <tr>
    </div>
    
        <?php

        if (isset($_POST['sub'])) {
            $section = $_POST['sec'];
            $year = $_POST['year'];
            $semi = $_POST['semi'];
            $view = new Grade();
            $names = $view->getstudentstmt($section, $year, $semi);
            $codes = $view->getcoursecode();


        ?>
       
            <div class="table-container">
                <table class="table table-striped table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course Code</th>
                            <th>Test</th>
                            <th>Assignment</th>
                            <th>Mid Exam</th>
                            <th>Final Exam</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody id="registrarTableBody">
                        <!-- Dynamic teacher data will appear here -->
                        <?php foreach ($names as $name) { ?>
                            <form action="includes/gradeV.inc.php" method="POST">
                                <tr>
                                    <td><input type='text' name='id[]' value="<?php echo htmlspecialchars($name['id']) ?>"></td>
                                    <td><input type='text' name='coursecode[]'></td>
                                    <td><input type='text' name='test[]'></td>
                                    <td><input type='text' name='mid[]'></td>
                                    <td><input type='text' name='assignment[]'></td>
                                    <td><input type='text' name='final[]'></td>
                                    <td><input type='text' name='grade[]'></td>
                                </tr>

                            <?php  } ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success" name="sub">Submit Grades</button>
            </div>

            </tr>
        <?php  } ?>
        </form>
    </div>
   
</body>