<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$subject = $_REQUEST['subject'];

$to = "fumex9910@gmail.com";
$sender = "demo@codesandbox.com.ng";

$subject = "Mail From:" .$email;

$text = "Name =" .$name . "\r\n Email =" .$email . "\r\n Message =". $message ."r\n Subject =" .$subject;

if($email != NULL) {
    mail($to, $sender, $subject, $text);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <title>Homepage</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg p-2 thenav">
            <div class="container">
            <a class="navbar-brand text-light logo" href="index.php"><img src="img/logo.png"></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-link active text-light ml-4" href="index.php">HOME<span class="sr-only">(current)</span></a>
                <a class="nav-link active text-light ml-4" href="about.php">ABOUT ME</a>
                <a class="nav-link text-light ml-4" href="projects.html">PROJECTS</a>
              </div>
            </div>
        </div>
          </nav>
    <div class="thebody">
    <div class="container content-area">
        <div class="row mx-lg-n5">
          <div class="col-sm col-md-12 col-lg-6 py-3 px-lg-5 pt-5 intro">
              <h2>Hi,<br>
              I'm <span class="name">Adebimpe</span>,<br>
              Software Developer.</h2>
              <p>Python / Django / Javascript<br>
                HTML / CSS 
              </p>
              <a href="https://docs.google.com/document/d/1_Ne7ueAk-zEz8CU3Hn2YNbaMeGsLzloizH70B4hJ1qY/edit?usp=sharing"><button class="ctabtn">View Resume</button></a>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
          </div>
          <div class="col py-3 px-lg-5 px-md-5 px-sm-5 pt-5">
              <img class="theimage w-100" src="img/owner.jpg" alt="picture-of-owner">
          </div>
        </div>
      </div>
    </div>
    <div class="main-area p-5">
      <div class="container">
        <div class="row mx-lg-n5">
          <div class="col-sm col-md-12 col-lg-6 py-3 px-lg-5 pt-5">
          <div class="bounce-img">
            <img src="img/IMG_1853.jpg" class="w-100 about-img" alt="...">
          </div>
          </div>
          <div class="col-sm col-md-12 col-lg-6 px-lg-5 px-md-5 px-sm-5 about-texts">
            <h1 class="about">ABOUT ME</h1>
            <p class="about-info">I am an elite software engineer with deep understanding of software principles and tools to
              develop projects that are scalable, solves problem and also help businesses succeed and exceed their 
              target. I also have indepth knowledge of agile methodology "SCRUM" in planning, preparing and executing projects
              and ensure that all the Quality Assurance target are met.
            </p>
          </div>
    </div>
        </div>
        </div>
    </div>
    <center>
    <div class="container skills">
      <h1 class="about skill-title mt-5">WHAT I DO</h1>
      <div class="row">
        <div class="col-sm col-lg-4 col-md-6">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h3 class="work">Frontend Development</h3>
            <p class="card-text">Front end development manages everything that users visually see first in their browser or application. Front end developers are responsible for the look and feel of a site. 
              Front end development is mostly focused on what some may coin the "client side" of development. 
              Front end developers will be engaged in analyzing code, design, and debugging applications along with 
              ensuring a seamless user experience. You manage what people first see in their browser. As a front end
               developer you are responsible for the look, feel and ultimately design of the site.</p>
        </div>
      </div>
    </div>
        <div class="col-sm col-lg-4 col-md-6">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
          <h3 class="work">Client Advisory</h3>
          <p>Technology is a pillar in today’s economy. There are few things we do without the assistance of 
            software or smart devices, and the same goes for businesses worldwide. It’s unlikely, however, 
            for these businesses and their leaders to keep up with the ever-changing world of technology.
            This is where technology consultants come in. We provide a unique, objective, and specialized 
            approach to technology and how to leverage it for business success.
            We help business clients accelerate growth, cut costs, mitigate risk, attract and develop talent, 
            and streamline important processes.</p>
        </div>
      </div>
    </div>
        
          <div class="col-sm col-lg-4 col-md-6">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
            <h3 class="work">Backend Development</h3>
            <p>Back end Development refers to the server side of development where you are primarily focused 
              on how the site works. Making updates and changes in addition to monitoring functionality of the 
              site will be your primary responsibility. This type of web development usually consists of 
              three parts: a server, an application, and a database. Code written by back end developers is what 
              communicates the database information to the browser. Anything you can’t see easily with the eye such 
              as databases and servers is the work of a back end developer. </p>
         </div>
        </div>
      </div>
      </div>
    </div>
  </center>
    <section id="contact" class="contact p-5">
      <div class="container">
        <div class="section-title">
          <h2 class="about">CONTACT ME</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Location:</h4>
                <p>Lagos, Nigeria</p>
              </div>

              <div class="email">
                <i class="fas fa-envelope-open-text"></i>
                <h4>Email:</h4>
                <p>fumex9910@gmail.com</p>
              </div>

              <div class="phone">
                <i class="fas fa-phone-alt"></i>
                <h4>Call:</h4>
                <p>+234 816 117 5969</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Firstname Lastname" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <button type="submit" class="ctabtn">Send Message</button>
            </form>

          </div>

        </div>
      </div>

    </section>
    <footer class="thefoot">
      <center class="container">
        <a class="navbar-brand text-light logo" href="#"><img src="img/logo.png"></a>
          <div class="social-links">
            <h5>Connect with me: </h5>
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
          <p>&copy; Copyright Adebimpe profile. All Rights Reserved</p>
      </center>
    </footer>
    <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>