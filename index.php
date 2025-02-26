<!--need to be changed to php extention-->
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
    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="image/stmary.png" >
   
    <title>Sanit Mary's University</title>
</head>
<body>
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
                            <a class="nav-bnt btn btn-light nav-link" aria-current="page" href="#">HOME</a>
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
                            <a class="nav-bnt btn btn-light nav-link" href="#news">NEWS</a>
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
    <hr>
    <section id="section2" >
            <h3 class="small" >LEARNING IS AN ENDLESS PROCESS.</h3>
            <h2 class="big">KNOWLEDGE IS POWER.</h2> 
             
    </section>
    <hr>
    <section id="course">
        <h1 class="course-heading">OUR COURSES</h1>
        <div class="row ">
    
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card img-thumbnail course-font card-hover">
                    <img src="image/accounting.JPG" class="card-img-top card-image img-fluid" title="click to learn more">
                    <div class="card-body">
                      <h5 class="card-title">ACCOUNTING AND FINANCE</h5>
                      <p class="card-text">Unlock your financial potential with our comprehensive Accounting course. Master key concepts, from bookkeeping to financial analysis, with expert-led lessons. Enroll now to advance your career and gain essential skills for success in any industry!</p>
                      <a href="accounting.php" class="btn btn-primary">LEARN MORE</a>
                    </div>
                  </div>    
            </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card img-thumbnail course-font card-hover">
                    <img src="image/computer.JPG" class="card-img-top card-image img-fluid" title="click to learn more">
                    <div class="card-body">
                      <h5 class="card-title">COMPUTER SCIENCE</h5>
                      <p class="card-text">Unlock the world of technology with our Computer Science course! Learn coding, algorithms, and software development from industry experts. Enroll today to build a strong foundation for a successful career in tech!</p>
                      <a href="computer.php" class="btn btn-primary">LEARN MORE</a>
                    </div>
                  </div>    
            </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card img-thumbnail course-font card-hover">
                    <img src="image/marketing.jpg" class="card-img-top card-image img-fluid" title="click to learn more">
                    <div class="card-body">
                      <h5 class="card-title">MARKETING</h5>
                      <p class="card-text">Boost your career with our dynamic Marketing course! Master digital strategies, consumer behavior, and brand building from industry professionals. Enroll now to become a marketing expert and lead successful campaigns!</p>
                      <a href="marketing.php" class="btn btn-primary">LEARN MORE</a>
                    </div>
                  </div>    
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card img-thumbnail course-font card-hover">
                    <img src="image/managment.JPG" class="card-img-top card-image img-fluid" title="click to learn more">
                    <div class="card-body">
                      <h5 class="card-title">MANAGMENT</h5>
                      <p class="card-text">Elevate your career with our comprehensive Management course! Learn key leadership skills, strategic planning, and team dynamics from seasoned professionals. Enroll today to become a confident leader and drive success in any organization!</p>
                      <a href="managment.php" class="btn btn-primary">LEARN MORE</a>
                    </div>
                  </div>    
            </div>

        </div>
    </section>
    <hr>
    <section id="news" >
        <h2 class="news-heading">NEWS</h2>
        <h3 class="news-text">See various information about our college.</h3>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="carousel-image d-block w-100 img-fluid" src="image/news1.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="carousel-image d-block w-100 img-fluid" src="image/news2.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="carousel-image d-block w-100 img-fluid" src="image/news3.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="carousel-image d-block w-100 img-fluid" src="image/news4.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="carousel-image d-block w-100 img-fluid" src="image/news5.jpg" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
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