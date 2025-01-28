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

        .quote {
            font-style: italic;
            color: #6c757d;
        }

        .image-box {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .content-section {
            padding: 50px 0;
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
    <h2 class="section-title">What is Marketing?</h2>
    <p class="lead text-center">
        Marketing is the art and science of identifying, anticipating, and satisfying customer needs and wants. It involves a range of activities, from understanding the consumer and creating compelling content to using digital channels to reach and engage the target audience. Marketing is essential to building brand awareness, driving sales, and establishing long-term customer relationships.
    </p>
    <div class="row mt-4">
        <div class="col-md-6">
            <img src="image/mar1.jpg" class="image-box img-fluid" alt="Marketing Overview">
        </div>
        <div class="col-md-6">
            <p>
                Marketing is a constantly evolving field that includes digital marketing, traditional marketing, content creation, social media strategies, SEO, and much more. The goal of marketing is to effectively communicate a brand's message to the target audience and drive them to take action, whether it’s buying a product, subscribing to a service, or simply engaging with content.
            </p>
            <blockquote class="quote">
                "Marketing is not the art of finding clever ways to dispose of what you make. It is the art of creating genuine customer value." – Philip Kotler
            </blockquote>
        </div>
    </div>
</section>

<!-- Key Areas in Marketing -->
<section id="areas" class="container content-section">
    <h2 class="section-title">Key Areas in Marketing</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <img src="image/mar2.jpg" class="card-img-top img-fluid" alt="Digital Marketing">
                <div class="card-body">
                    <h5 class="card-title">Digital Marketing</h5>
                    <p class="card-text">Digital marketing is the use of online platforms and technologies to promote products or services. It includes strategies like search engine marketing (SEM), email marketing, social media campaigns, and paid online ads.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/mar3.jpg" class="card-img-top img-fluid" alt="Content Marketing">
                <div class="card-body">
                    <h5 class="card-title">Content Marketing</h5>
                    <p class="card-text">Content marketing focuses on creating and distributing valuable content that attracts and engages the target audience. It includes blogs, articles, videos, podcasts, and infographics aimed at educating and entertaining consumers.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/mar4.jpg" class="card-img-top img-fluid" alt="SEO (Search Engine Optimization)">
                <div class="card-body">
                    <h5 class="card-title">SEO (Search Engine Optimization)</h5>
                    <p class="card-text">SEO involves optimizing your website and content to rank higher in search engine results pages (SERPs). It includes keyword research, content creation, on-page SEO, and link-building strategies to improve organic traffic.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Branding, Social Media, and Market Research Section -->
    <div class="row g-4 mt-5">
        <div class="col-md-4">
            <div class="card">
                <img src="image/mar5.jpg" class="card-img-top img-fluid" alt="Branding">
                <div class="card-body">
                    <h5 class="card-title">Branding</h5>
                    <p class="card-text">Branding is the process of creating a unique name, symbol, or image for a product or company. Effective branding helps businesses stand out from competitors and create a lasting impression on consumers.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/mar6.jpg" class="card-img-top img-fluid" alt="Social Media Marketing">
                <div class="card-body">
                    <h5 class="card-title">Social Media Marketing</h5>
                    <p class="card-text">Social media marketing leverages platforms like Facebook, Instagram, Twitter, and LinkedIn to engage with consumers. It involves creating content, running ads, and building communities to promote products and services.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="image/mar7.jpg" class="card-img-top img-fluid" alt="Market Research">
                <div class="card-body">
                    <h5 class="card-title">Market Research</h5>
                    <p class="card-text">Market research involves gathering and analyzing data about market trends, consumer preferences, and competitive dynamics. It helps businesses make informed decisions and tailor their marketing strategies accordingly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Marketing Strategy Section -->
<section class="bg-light content-section">
    <div class="container">
        <h2 class="section-title">Developing a Marketing Strategy</h2>
        <p class="text-center">
            A marketing strategy is a comprehensive plan that outlines a business’s goals, target audience, tactics, and the channels to be used to achieve those objectives. It integrates various marketing techniques and activities to deliver consistent results over time.
        </p>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <img src="image/mar8.jpg" class="card-img-top img-fluid" alt="Strategic Marketing">
                    <div class="card-body">
                        <h5 class="card-title">Strategic Marketing</h5>
                        <p class="card-text">Strategic marketing focuses on creating a long-term plan to achieve business objectives. It involves analyzing market trends, consumer behavior, and competitor strategies to position a company for success.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="image/mar9.jpg" class="card-img-top img-fluid" alt="Target Audience">
                    <div class="card-body">
                        <h5 class="card-title">Target Audience Identification</h5>
                        <p class="card-text">Identifying the right target audience is crucial to developing a successful marketing strategy. This process involves understanding consumer needs, segmenting the market, and crafting messages tailored to specific groups.</p>
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
