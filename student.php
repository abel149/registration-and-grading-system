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
  <link rel="stylesheet" href="StudentStyle.css">

  <link rel="icon" href="image/stmary.png">

  <title>Saint Mary's University</title>

  <!-- Bootstrap -->

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
              <a class="nav-bnt btn btn-light nav-link" href="#news">Course Outline</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link" href="#vision-about">Grading Summary</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link" href="#bottom">Module</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link" href="#bottom">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-bnt btn btn-light nav-link log" href="login/index.html">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

  </section>
  <br />
  <br />
  <br />
  <br />
  <section>






    <h5><?php echo $_SESSION['userid'] ?></h5>
    <table border="1">
      <tr>

        <th>course code</th>
        <th>test</th>
        <th>mid</th>
        <th>final</th>
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



  </section>



</html>