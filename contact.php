
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Get in touch | Milovan Jevtic</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="contact">
  <!--Main header-->
  <header class="main-header">
    <div class="container">
      <div class="logo">
        <a href="index.html"><img class="logo-image" src="img/MJ logo.png" alt="logo" /></a>
      </div>
      <div class="navbar">
        <div class="menu-btn">
          <div class="btn-line"></div>
          <div class="btn-line"></div>
          <div class="btn-line"></div>
        </div>
        <nav class="menu">
          <ul class="menu-nav">
          <li class="nav-item"><a href="index.html" class="link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="link">About</a></li>
            <li class="nav-item">
              <a href="projects.html" class="link">Projects</a>
            </li>
            <li class="nav-item"><a href="cv.html" class="link">CV</a></li>
            <li class="nav-item">
              <a href="contact.php" class="link">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>



  <!--Main container-->
  <main class="main">
    <div class="wrap">
      <div class="title">
        <h2>Get in Touch</h2>
      </div>
    </div>
    <!--Section-->
    <div class="main-part">
      <!--Article-->
      <div class="part">
        <!--Form-->
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id='contact-form'>
          <p class="form-name">
            <input type="text" name="name" class="required requiredfield" placeholder="Name *" require />
          </p>
          <p class="form-email">
            <input type="email" name="email" class="required requiredfield" placeholder="Email *" require />
          </p>
          <p class="form-phone">
            <input type="phone" name="phone" class="required requiredfield" placeholder="Phone *" require />
          </p>
          <p class="form-comment">
            <textarea name="message" cols="60" rows="10" class="required requiredfield"
              placeholder="Message *" require></textarea>
          </p>
          <p class="form-submit">
            <button type="submit" name="submit">Send</button>
          </p>
          <?php
          //Check for submit
          if(filter_has_var(INPUT_POST, 'submit')) {
          //Get Form Data
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST[phone];
          $message = $_POST['message'];
          $toEmail = 'jevta87@gmail.com';
          $subject = 'Contact Request From' .$name;
          $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Phone</h4><p>'.$phone.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
          ';
          //Email Headers
          $headers = "MIME-Version: 1.0" ."\r\n";
					$headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
									
					//Additional headers
          $headers .= "From: " .$name. "<" .$email. ">". "\r\n";
          if(mail($toEmail, $subject, $body, $headers)){
            echo "Your email has been sent";
          } else {
            echo 'Your message was not send';
          }

    }
?>
        </form>
        <!--Form END-->
      </div>
      <!--Article END-->
      <div class="sidebar"></div>
    </div>
    <!--Section END-->
  </main>
  <!--Main container END-->



  <!--Footer-->
  <footer class="main-footer" id="footer-content">
    <!--Footer top-->
    <div class="container">
      <div class="boxes">
        <div>
          <ul class="soc-net">
            <li>
              <a href="https://github.com/jevta87" target="_blank"><img src="img/github.png" alt="github" />

              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/milovan-jevtic-6bb15910b/" target="_blank"><img
                  src="img/linkedin.png" alt="linkedin" /></a>
            </li>
            <li>
              <a href="https://www.facebook.com/milovan.jevtic" target="_blank"><img src="img/facebook_1.png"
                  alt="facebook" /></a>
            </li>
            <li>
              <a href="https://twitter.com" target="_blank"><img src="img/twitter_1.png" alt="twitter" /></a>
            </li>
          </ul>
        </div>
      </div>
      <!--Footer top END-->
      <!--Footer bottom-->
      <div class="footer-bottom">
        <p>Copyright &copy 2019 Milovan Jevtic. All rights reserved.</p>
        <div class="triangle">
          <a href="#" class="back-to-top" title="Back to top">
            <i class="fa fa-arrow-up"></i>
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <!--Footer bottom END-->
    </div>
  </footer>
  <!--Footer END-->

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>