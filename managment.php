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
        /* Custom styles */
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
            background: url('https://via.placeholder.com/1600x600') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .section-title {
            text-align: center;
            margin-top: 50px;
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

        .quote {
            font-style: italic;
            color: #6c757d;
        }

        .image-box {
            width: 100%;
            height: 300px;
            object-fit: cover;
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
    <h2 class="section-title">What is Management?</h2>
    <p class="lead text-center">
        Management is the process of planning, organizing, leading, and controlling resources within an organization to achieve its goals and objectives. It is a multifaceted discipline that involves strategy, leadership, and decision-making at every level of an organization. Effective management ensures that companies run smoothly and achieve long-term success.
    </p>
    <div class="row mt-4">
        <div class="col-md-6">
            <img src="image/man1.jpg" class="image-box img-fluid" alt="Management Overview">
        </div>
        <div class="col-md-6">
            <p>
                Management involves setting goals, developing plans, allocating resources, and making decisions that lead to success. It includes the management of both human and financial resources, as well as the application of leadership skills to motivate teams and drive performance. At its core, management is about making organizations more efficient and effective.
            </p>
            <blockquote class="quote">
                "Management is doing things right; leadership is doing the right things." – Peter Drucker
            </blockquote>
        </div>
    </div>
</section>

<!-- Key Areas in Management -->
<section id="areas" class="container content-section">
    <h2 class="section-title">Key Areas in Management</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <img src="image/man2.jpg" class="card-img-top img-fluid" alt="Business Management">
                <div class="card-body">
                    <h5 class="card-title">Business Management</h5>
                    <p class="card-text">Business management focuses on overseeing the operations of an organization, ensuring that resources are utilized effectively, and managing the day-to-day activities of a company.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/man3.jpg" class="card-img-top img-fluid" alt="Human Resources Management">
                <div class="card-body">
                    <h5 class="card-title">Human Resources Management</h5>
                    <p class="card-text">Human Resources (HR) management involves the recruitment, development, and management of employees within an organization, ensuring a motivated and skilled workforce.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/man4.jpg" class="card-img-top img-fluid" alt="Project Management">
                <div class="card-body">
                    <h5 class="card-title">Project Management</h5>
                    <p class="card-text">Project management is the practice of planning, executing, and overseeing projects within an organization to ensure they are completed on time, within budget, and according to specifications.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Leadership and Strategy Section -->
    <div class="row g-4 mt-5">
        <div class="col-md-4">
            <div class="card">
                <img src="image/man5.jpg" class="card-img-top img-fluid" alt="Leadership">
                <div class="card-body">
                    <h5 class="card-title">Leadership</h5>
                    <p class="card-text">Leadership in management refers to the ability to inspire and influence people to achieve organizational goals. Good leadership is key to driving company culture, motivating teams, and ensuring success.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/man6.jpg" class="card-img-top img-fluid" alt="Strategic Management">
                <div class="card-body">
                    <h5 class="card-title">Strategic Management</h5>
                    <p class="card-text">Strategic management involves setting long-term goals, analyzing competitive forces, and making decisions to position an organization effectively in the market.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/man7.jpg" class="card-img-top img-fluid" alt="Operations Management">
                <div class="card-body">
                    <h5 class="card-title">Operations Management</h5>
                    <p class="card-text">Operations management focuses on optimizing the production and delivery of goods and services, ensuring efficiency, quality control, and cost management.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Topics Section -->
<section class="bg-light content-section">
    <div class="container">
        <h2 class="section-title">Advanced Topics in Management</h2>
        <p class="text-center">
            Beyond the core areas, management also includes specialized fields that deal with more complex and strategic aspects of leadership and organizational behavior.
        </p>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <img src="image/man8.jpg" class="card-img-top img-fluid" alt="Change Management">
                    <div class="card-body">
                        <h5 class="card-title">Change Management</h5>
                        <p class="card-text">Change management is the process of helping organizations and employees navigate through significant changes, such as mergers, new technologies, or restructuring.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="image/man9.jpg" class="card-img-top img-fluid" alt="Innovation Management">
                    <div class="card-body">
                        <h5 class="card-title">Innovation Management</h5>
                        <p class="card-text">Innovation management involves managing processes that encourage new ideas, technology, and solutions to foster growth and competitiveness in an organization.</p>
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
