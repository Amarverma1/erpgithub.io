  <?php

  ob_start();
  session_start();

  //checking if the session is valid
  
  ?>

  <?php include('connect.php');?>


<?php 
try{

         //checking form data and empty fields
          if(isset($_POST['done'])){
            
          
              if (empty($_POST['fathername'])) {
               
                throw new Exception("father name cannot be empty");
                
              }
                  if(empty($_POST['mothername']))
                  {
                    throw new Exception("Mothername cannot be empty");
                    
                  }
                    
                     if(empty($_POST['number']))
                    {
                      throw new Exception("Mobile Number cannot be empty");
                    
                    }
                    
                      if(empty($_POST['Address']))
                      {
                         throw new Exception("Address cannot be empty");
                    
                     }
                         if(empty($_POST['email']))
                        {
                          throw new Exception("Email cannot be empty");
                        
                       }
 
  //initializing the student id
  $rollno = $_POST['id'];

  //udating students information to database table "students"
  $result = mysqli_query($conn,"update users fathername='$_POST[fathername]',mothername='$_POST[mothername]',number='$_POST[number]', Address = '$_POST[Address]', email = '$_POST[email]' where rollno=$rollno");
  $success_msg = 'Updated  successfully';
  
  }

}
catch(Exception $e){

  $error_msg =$e->getMessage();
}


?>



<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>My Profile</title>
<meta charset="UTF-8">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="main.css">

</head>
<!-- head ended -->


<!-- body started -->
<body>

<!-- Menus started-->
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html{
  overflow-x: hidden;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  z-index: 100;
  transition: all 0.5s ease;
  background: black;
}
.sidebar.close{
  width: 78px;
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
  margin-left: 0px;
}
.sidebar.close .logo-details .logo_name{
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #1d1b31;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .iocn-link{
  display: block
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}
.sidebar .nav-links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}
.sidebar .profile-details{
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #1d1b31;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details{
  background: none;
}
.sidebar.close .profile-details{
  width: 78px;
}
.sidebar .profile-details .profile-content{
  display: flex;
  align-items: center;
}
.sidebar .profile-details img{
  height: 20px;
  width: 20px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details img{
  padding: 10px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
  display: none;
}
.sidebar .profile-details .job{
  font-size: 12px;
}
.home-section{
  position: relative;
  height: 100vh;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
}
.sidebar.close ~ .home-section{
  left: 78px;
  width: calc(100% - 78px);
}
.home-section .home-content{
  height: 60px;
  display: flex;
  align-items: center;
}

.home-section .home-content .bx-menu,
.home-section .home-content .text{
  color: #11101d;
  font-size: 35px;
}
.home-section .home-content .bx-menu{
  margin: 0 15px;
  cursor: pointer;
}
.home-section .home-content .text{
  font-size: 26px;
  font-weight: 600;
}
@media (max-width: 420px) {
  .sidebar.close .nav-links li .sub-menu{
    display: none;
  }
}
input[type='text'],input[type="mail"], select, textarea {
  width: 150%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color: black;
  outline: 0px;
}
input[type='reg']{
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color: black;
  outline: 0px;
}

input[type=submit] {
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 50%;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
</head>
<!-- head ended -->

<!-- body started -->
<body>

<!-- Menus started-->
<div class="theme">
<header>
  <div class="sidebar close">
    <div class="logo-details">
<i class="fa fa-graduation-cap" aria-hidden="true"></i>
      <span class="logo_name">Profile Update</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="main.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>
     <!--  <li>
        <div class="iocn-link">
          <a href="students.php">
           <i class="fa fa-users" aria-hidden="true"></i>
            <span class="link_name">Students</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Students</a></li>
        </ul>
      </li> -->
      
      <!--<li>
        <a href="report.php">
        <i class="fa fa-check" aria-hidden="true"></i>
          <span class="link_name">My Report</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">My Report</a></li>
        </ul>
      </li>-->
     
      
      <li>
        <a href="profile.php">
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
        <div class="profile_name"><?php echo $_SESSION['name'];?></div>
        <div class="job">Roll no.<?php echo $_SESSION['rollno']; ?></div>


      </div>
      <a href="logout.php"><i class='bx bx-log-out' > </i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
     <p><a href="http://localhost:8080/login/home.php" style="color: black;text-decoration: none;">Home</a></p>
       
          <div class="profile">

               <ul style="list-style:none;display: inline-flex;margin-left: 970px;margin-top: 10px;">

                <li><?php echo '<img src="data:Photo;base64,'.base64_encode($_SESSION['photo']).'" alt ="Image" style="width: 45px; height: 45px;border-radius:30px;border:5px solid #cccccc" >';?></li> 
                 <li style="margin-top: 12px;margin-left: 10px;"><h4><?php echo $_SESSION['name'];?></h4></li>
                  <li style="margin-top: 14px;margin-left: 8px;"> <a href="logout.php"><i class='bx bx-log-out' > </i></a></li>
               </ul>
               
          </div>
    </div>

  <h1>My Profile</h1>
  <center>

<div class="row">
    <div class="content">

          <h3>Update Account</h3>
          <br>
          
          <!-- Error or Success Message printint started --><p>
      <?php

          if(isset($success_msg))
          {
            echo $success_msg;
          }
          if(isset($error_msg))
          {
            echo $error_msg;
          }

        ?>
          </p><!-- Error or Success Message printint ended -->

          <br>
  
           <form method="post" action="">
          <input type="reg" id="input1"  placeholder="Enter Your Registration/Roll No Number to continue" required="" name="rollno">
           <input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Go!" name="button" />
        </form>


      <?php

      if(isset($_POST['button'])){

      //initializing student ID from form data
       $rollno = $_POST['rollno'];

       $i=0;

       //searching students information respected to the particular ID
       $all_query = mysqli_query($conn,"select * from users where users.rollno='$rollno'");
       while ($data = mysqli_fetch_array($all_query)) {
         $i++;
       
       ?>
<form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3" style="margin-top:15px;">
   <table class="table table-striped">
  
          <tr>
            <td>Registration Number </td>
            <td><span style="margin-left: 20px;"><?php echo $data['rollno']; ?></span></td>
          </tr>

          <tr>
              <td>Student's Name</td>
              <td><span style="margin-left: 20px;"><?php echo $data['name']; ?></td>
          </tr>

          <tr>
              <td>Father Name</td>
              <td><input type="text" name="fathername" value="<?php echo $data['fathername']; ?>"></input></td>
          </tr>

          <tr>
              <td>Mother name</td>
              <td><input type="text" name="mothername" value="<?php echo $data['mothername']; ?>"></input></td>
          </tr>
          
          <tr>
              <td>Mo-Number</td>
              <td><input type="text" name="number" value="<?php echo $data['number']; ?>"></input></td>
          </tr>

          <tr>
              <td>Email</td>
              <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></input></td>
          </tr>

          <tr>
              <td>Address</td>
              <td><input type="text" name="Address" value="<?php echo $data['Address']; ?>"></input></td>
          </tr>

          <input type="hidden" name="id" value="<?php echo $rollno; ?>">
          
          <tr><td></td></tr>
          <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Update" name="done" /></td>
                
          </tr>

    </table>
</form>
     <?php 
   } 
     }  
     ?>


      </div>

  </div>

  </center>


</header>
<!-- Menus ended -->

<!-- Content, Tables, Forms, Texts, Images started -->

<!-- Contents, Tables, Forms, Images ended -->

</body>
<!-- Menus ended -->
<script type="text/javascript">
  let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});

</script>

</html>
