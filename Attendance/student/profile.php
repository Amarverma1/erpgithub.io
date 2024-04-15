<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Student</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="component3.css">
  <link rel="stylesheet" href="profile.css">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
  <style type="text/css">
    .article_links:hover {
      transform: translateY(-2px);
      cursor: pointer;
    }

    .library:hover {
      transform: translateY(-2px);
    }

    .glow-on-hover {
      width: 150px;
      height: 30px;
      border: none;
      outline: none;
      color: #fff;
      background: none;
      cursor: pointer;
      position: relative;
      z-index: 0;
      margin-top: 10px;
    }

    .glow-on-hover:before {
      content: '';
      background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
      position: absolute;
      top: -2px;
      left: -2px;
      background-size: 400%;
      z-index: -1;
      filter: blur(5px);
      width: calc(100% + 4px);
      height: calc(100% + 4px);
      animation: glowing 20s linear infinite;
      opacity: 0;
      transition: opacity .3s ease-in-out;

    }

    .glow-on-hover:active {
      color: #000
    }

    .glow-on-hover:active:after {
      background: transparent;
    }

    .glow-on-hover:hover:before {
      opacity: 1;
    }

    .glow-on-hover:after {
      z-index: -1;
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      background: #111;
      left: 0;
      top: 0;
    }

    @keyframes glowing {
      0% {
        background-position: 0 0;
      }

      50% {
        background-position: 400% 0;
      }

      100% {
        background-position: 0 0;
      }
    }
  </style>

  <div class="sidebar close">
    <div class="logo-details">
      <i class="fa fa-graduation-cap" aria-hidden="true"></i>
      <span class="logo_name">Student</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="main.php">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="main.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa fa-check" aria-hidden="true"></i>
            <span class="link_name">Result</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Result</a></li>
        </ul>
      </li>
      <li>

        <li>
          <a href="account.php">
        <i class="fa fa-pencil" aria-hidden="true"></i>
            <span class="link_name">Update Profile</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Update Profile</a></li>
          </ul>
        </li>
        <li>
        <!--<div class="iocn-link">
          <a href="#">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="link_name">Timetable</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Timetable</a></li>
        </ul>
      </li>
      
    
        <a href="#">
        <i class="fa fa-money" aria-hidden="true"></i>

          <span class="link_name">Fees</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Fees</a></li>
        </ul>
      </li>
     
      <li>
        <a href="#">
         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

          <span class="link_name">My courses</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">My courses</a></li>
        </ul>
      </li>
      <li>-->
        <a href="#">
          <i class="fa fa-user" aria-hidden="true"></i>

          <span class="link_name">Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Profile</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <?php echo '<img src="data:Photo;base64,'.base64_encode($_SESSION['photo']).'" alt ="Image" style="width: 55px; height: 55px;" >';?>
          </div>
          <div class="name-job">
            <div class="profile_name">
              <?php echo $_SESSION['name'];?>
            </div>
            <div class="job">Roll no.
              <?php echo $_SESSION['rollno']; ?>
            </div>


          </div>
          <a href="logout.php"><i class='bx bx-log-out'> </i></a>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <p>Home</p>

      <div class="profile">

        <ul style="list-style:none;display: inline-flex;margin-left: 970px;margin-top: 10px;">

          <li>
            <?php echo '<img src="data:Photo;base64,'.base64_encode($_SESSION['photo']).'" alt ="Image" style="width: 45px; height: 45px;border-radius:30px;border:5px solid #cccccc" >';?>
          </li>
          <li style="margin-top: 12px;margin-left: 10px;">
            <h4>
              <?php echo $_SESSION['name'];?>
            </h4>
          </li>
          <li style="margin-top: 14px;margin-left: 8px;"> <a href="logout.php"><i class='bx bx-log-out'> </i></a></li>
        </ul>

      </div>
    </div>
    <!--Profile code here-->
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Profile Details</h1>
      </div><!-- End Page Title -->
  
      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">
  
            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
  
              <?php echo '<img src="data:Photo;base64,'.base64_encode($_SESSION['photo']).'" alt ="Image" style="width: 90px; height: 90px;border-radius:2px;margin-left:20px;margin-top:10px; border:3px solid #cccccc" >';?>
                <h2><?php echo $_SESSION['name'];?></h2>
              </div>
            </div>
  
          </div>
  
          <div class="col-xl-8">
  
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <div class="tab-content pt-2">
  
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">About</h5>
                    <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
  
                    <h5 class="card-title">Profile Details</h5>
  
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Full Name</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['name'];?></div>
                     
                    </div>
  
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Father's Name</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['fathername'];?></div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Mother's Name</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['mothername'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">rollno</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['rollno'];?></div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Gender</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['gender'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">DOB</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['DOB'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Year</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['Year'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">School Name</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['Schoolname'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Couse Name</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['Course'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Mobile-No</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['number'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email-Id</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['email'];?></div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">City</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['city'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Address</div>
                      <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['Address'];?></div>
                    </div>
  
                  </div>
                 
                </div><!-- End Bordered Tabs -->
              
              </div>
              
            </div>
            
          </div>
        </div>
      </section>
  
    </main><!-- End #main -->


    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>



  </section>

  <script src="script.js"></script>
  <script src="popup.js"></script>

</body>

</html>