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

    <link rel="icon" href="image/stmary.png">
    <style>
       
        hr {
            border: 0;
            height: 3px;
            background-color: #000; /* Black color */
            margin: 20px 0; /* Spacing above and below the line */
        }
        .container-fluid{
            padding: 2% 5% 3% 5%;
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
        .hero-section {
            background: url('image/cs1.jpg') no-repeat center center;
            background-size: cover;
            color: black;
            padding: 100px 0;
            text-align: center;
        }
        p{
            font-family:ubuntu;
        }

        .section-title {
            text-align: center;
            margin: 50px 0px 50px 0px;
            font-family:Montserrat;
            font-size: 2rem;
            font-weight: bold;
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .bg-dark-custom {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        .feature-icon {
            font-size: 50px;
            color: #17a2b8;
        }

        .content-section {
            padding: 50px 0;
        }

        .footer-text {
            text-align: center;
            color: white;
            padding: 20px;
        }

        .image-box {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .quote {
            font-style: italic;
            color: #6c757d;
        }

        #vision-about{
        background-color: #4CAF50;
        padding: 5% 8%;
        color: white;
        }
        .social-icon{
         padding: 2rem;
        color: white;
        }
        #bottom{
            margin-top: 3rem;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<section id = "Navigation" >
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg ">
              <img class="logo" src="image/stmary.png" alt="Saint Mary's logo" >
              <a class="navbar-brand" style="color: white;" href="#">        
               Sanit Mary's University 
               <p class="brand-amharic">ቅድስት ማርያም ዩኒቨርሲቲ</p>
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" aria-current="page" href="index.php">HOME</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-bnt btn btn-light nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#course" role="button" aria-expanded="false">COURSES</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="accounting.php">Accounting and Finance</a></li>
                              <li><a class="dropdown-item" href="computer.php">Computer Science</a></li>
                              <li><a class="dropdown-item" href="managment.php">Managment</a></li>
                              <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" href="#vision-about">VISION</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" href="#vision-about">ABOUT US</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link" href="#bottom">CONTACTUS</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-bnt btn btn-light nav-link log" href="login.php">Login<i class="fa-solid fa-user-plus"></i></a> 
                        </li>
                    </ul> 
                    <form class="d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                      </form>
                    </ul>
                    </div>               
          </nav>  
          
    </section>

<!-- About Section -->
<section id="about" class="container content-section">
    <h2 class="section-title">What is Computer Science?</h2>
    <p class="lead text-center">
        Computer Science is the study of computers and computational systems. It encompasses a broad range of topics
        including programming, algorithms, data structures, artificial intelligence, machine learning, and more. It
        combines mathematical theories with practical applications to create systems that solve real-world problems.
    </p>
    <div class="row mt-4">
        <div class="col-md-6">
            <img src="image/cs1.jpg" class="image-box img-fluid" alt="Computer Science Overview">
        </div>
        <div class="col-md-6">
            <p>
                At its core, computer science is about problem-solving and creating systems to manage and process data.
                Whether it’s developing software that helps businesses run more efficiently, creating websites, or designing
                the infrastructure of modern communication systems, computer science is the backbone of our digital world.
            </p>
            <blockquote class="quote">
                "Computer science is no more about computers than astronomy is about telescopes." – Edsger Dijkstra
            </blockquote>
        </div>
    </div>
</section>

<!-- Key Areas in Computer Science -->
<section id="fields" class="container content-section">
    <h2 class="section-title">Key Areas in Computer Science</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <img src="image/cs2.jpg" class="card-img-top img-fluid" alt="Programming">
                <div class="card-body">
                    <h5 class="card-title">Programming</h5>
                    <p class="card-text">Programming is the fundamental skill in computer science. It involves writing code to create software, websites, mobile apps, and more.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/cs3.jpg" class="card-img-top img-fluid" alt="Artificial Intelligence">
                <div class="card-body">
                    <h5 class="card-title">Artificial Intelligence</h5>
                    <p class="card-text">AI simulates human intelligence in machines, enabling them to perform tasks such as speech recognition, decision-making, and learning.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/cs4.jpg" class="card-img-top img-fluid" alt="Cybersecurity">
                <div class="card-body">
                    <h5 class="card-title">Cybersecurity</h5>
                    <p class="card-text">Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks and unauthorized access.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Topics Section -->
<section class="bg-light content-section">
    <div class="container">
        <h2 class="section-title">Advanced Topics in Computer Science</h2>
        <p class="text-center">
            Beyond the foundational topics, computer science has advanced into specialized areas that push the boundaries of
            technology. These fields involve cutting-edge research and innovations that are shaping the future.
        </p>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <img src="image/cs5.jpg" class="card-img-top img-fluid" alt="Machine Learning">
                    <div class="card-body">
                        <h5 class="card-title">Machine Learning</h5>
                        <p class="card-text">Machine learning involves algorithms and models that allow computers to learn from data and make predictions without being explicitly programmed.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="image/cs6.jpg" class="card-img-top img-fluid" alt="Blockchain">
                    <div class="card-body">
                        <h5 class="card-title">Blockchain Technology</h5>
                        <p class="card-text">Blockchain is a decentralized ledger system used for secure digital transactions. It’s the technology behind cryptocurrencies like Bitcoin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="vision-about"  >
        <div class="row">
            <div class="col-lg-6 vision">
                <h2>VISION AND MISSION</h2>
                <h3>VISION</h3>
                <p>The Vision of St. Mary’s University is to become among the leading higher education centers of academic excellence in teaching-learning, research, publications and community services in East-Africa and contribute to the development of Ethiopia.</p>
                <h3>MISSION</h3>
                <P>The Mission of St. Mary’s University is to offer conventional and distance education that is accessible to the larger society through reasonable tuition focusing on quality and standards in teaching, research and outreach services. </P>
            </div>
            <div class="col-lg-6 vision">
                <h2>CONTACT US</h2>
                <P>To the right of Oillibya, from Federal Police Building 200 Meters Down to Africa Union Road (Sarbet Road)</P>
                <p>P. O. Box 18490/1211</p>
                <p> Phone : +251 11 553 80 17 /20</p>
            </div>
            <div id="bottom">
                <h3>FOLLOW US</h3>
                <div class="socialIcons">
                    <a href=""><i class="fa-brands fa-facebook fa-4x social-icon"></i></a>
                    <a href=""><i class="fa-brands fa-instagram fa-4x social-icon"></i></a>
                    <a href=""><i class="fa-brands fa-twitter fa-4x social-icon"></i></a>
                    <a href=""><i class="fa-brands fa-google-plus fa-4x social-icon"></i></a>
                    <a href=""><i class="fa-brands fa-youtube fa-4x social-icon"></i></a>
                  </div>
              
                  <div class="footerBottom">
                    <p style="color: grey;">+251 11 553 80 17 /20</p>
                    <a style="text-decoration: none;" href="http://lms.smuc.edu.et/">St Mary's University</a>
                    <center style="color:grey; "> <small><p>Copyright &copy;2024 Designed by<span > Daniel hailu and Abel ashenafi</span> </p></small></center>
                  </div>
            </div>

        </div>

    </section>

</body>
</html>
