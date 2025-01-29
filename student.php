<?php
session_start();

include 'classes/dbh.class.php';
include 'classes/gradeM.class.php';
include 'classes/gradeC.class.php';


$result = new Grade();
$display = $result->getstudentresultbyid($_SESSION['userid']);

?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  <link rel="stylesheet" href="">

  <link rel="icon" href="image/stmary.png">

  <title>Saint Mary's University</title>

</head>
<style>
  .container-fluid{
    padding: 1% 5% 1% 5%;
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
.fa-solid{
    margin-left: 5px;
}

.navbar-brand{
   font-family: "ubuntu";
   font-size: 2rem;
   margin-right: 18%;
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
    margin-right: 6px;
    color: white;
}
.table-center{
  padding:2% 5% 2% 5%;
}
.table {
            border: 2px solid #ccc;

        }
        #st-grade{
          display:none;

        }
        #profile {
            background-color:rgba(97, 168, 103, 0.1);
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 500px;
            margin: auto;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 15px; /* Space between image & text */
        }
        .img-profile {
            width: 170px;
            height:170px;
            border-radius: 50%;
            
        }
        .info {
            text-align: left;
        }
         /* Welcome Section */
         .welcome {
            text-align: center;
            padding: 40px;
            background: white;
            margin: 20px auto;
            width: 80%;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .welcome h1 {
            font-size: 28px;
        }

        /* News Sections */
        .news-container {
            width: 80%;
            margin: auto;
            display: flex;
            gap: 20px;
        }
        .news {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .news h2 {
            text-align: center;
            margin-bottom: 15px;
        }
        .news ul {
            list-style: none;
            padding: 0;
        }
        .news ul li {
            margin: 10px 0;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .news ul li a {
            text-decoration: none;
            color:rgb(36, 37, 36);
            font-weight: bold;
        }
        .news ul li a:hover {
            text-decoration: underline;
        }

        /* Footer */
        #footer {
            text-align: center;
            padding: 15px;
            background:rgb(105, 182, 105);
            color: white;
            margin-top: 20px;
        }
        #stud-home{
          padding:3% 3%;
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
              <a class="nav-bnt btn btn-light nav-link" aria-current="page" href="#stud-home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link" href="#news">Course Outline</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link" href="#vision-about" 
                                onclick="
                                document.getElementById('st-grade').style.display = 'block';
                                document.getElementById('stud-home').style.display = 'none';
                                document.getElementById('footer').style.display = 'none';
                                //document.getElementById('stud-home').style.display = 'block';
                                ">Grading Summary</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link" href="#bottom">Module</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link" href="#bottom">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link log" href="includes/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

  </section>
  <br>
  <br>
  <section id="stud-home">
  <div class="welcome">
        <h1>Welcome to the University Student Portal</h1>
        <p>Your one-stop destination for university updates and technology news.</p>
    </div>

    <!-- News Sections -->
    <div class="news-container">
        <!-- University News -->
        <div class="news">
            <h2>University News</h2>
            <ul>
                <li><a href="#">📢 Semester Registration Open - Apply Now!</a></li>
                <li><a href="#">🎓 Graduation Ceremony - Important Details</a></li>
                <li><a href="#">🏆 University Sports Fest - Register Your Team</a></li>
                <li><a href="#">📅 Mid-term Exam Schedule Released</a></li>
            </ul>
        </div>

        <!-- Technology News -->
        <div class="news">
            <h2>Technology News</h2>
            <ul>
                <li><a href="#">🚀 AI Revolution: How AI is Changing Education</a></li>
                <li><a href="#">💻 Top 10 Programming Languages in 2025</a></li>
                <li><a href="#">📱 The Future of Smartphones - What's Next?</a></li>
                <li><a href="#">🔒 Cybersecurity Tips Every Student Should Know</a></li>
            </ul>
        </div>
    </div>
  </section>
  <!-- Footer -->
<div id="footer">
        <p>&copy; 2025 University Student Portal. All Rights Reserved.</p>
    </div>

 
  <section id="st-grade">
  <div id="profile">
        <img class="img-profile "src="image/566.jpg" alt="Profile Picture">
        <div class="info">
            <h4>ID: <?php echo $_SESSION['userid'] ?></h4>
            <p>Department: Computer-Scinece</p>
        </div>
    </div>

  
    <div class="table-center">
    <table border="1" class="table table-striped table-bordered mt-3">
      <tr>
        <th>Course code</th>
        <th>Test</th>
        <th>Mid</th>
        <th>Final</th>
        <th>Grade</th>
      </tr>

      <?php foreach ($display as $res) { ?>
        <tr>
          <td><?php echo $res['corsecode'] ?></td>
          <td><?php echo $res['test1'] ?></td>
          <td><?php echo $res['mid'] ?></td>
          <td><?php echo $res['final'] ?></td>
          <td></td>
        </tr>
      <?php  } ?>
    </table>
    </div>
    
  </section>
</html>