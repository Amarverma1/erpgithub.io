<?php

ob_start();
session_start();


?>

<?php

include('connect.php');

//data insertion
  try{

    //checking if the data comes from students form
    if(isset($_POST['button'])){

      //students data insertion to database table "users"
        $result = mysqli_query($conn,"insert into users( user_name, password, email, name, rollno, Course, Year, DOB, number, fathername, mothername, gender, photo, Address, Schoolname, attendence, performance, city, fee) values('$_POST[user_name]','$_POST[password]','$_POST[email]','$_POST[name]','$_POST[rollno]','$_POST[Course]','$_POST[Year]','$_POST[DOB]','$_POST[number]','$_POST[fathername]','$_POST[mothername]','$_POST[gender]','$_POST[photo]','$_POST[Address]','$_POST[Schoolname]','$_POST[attendence]','$_POST[performance]','$_POST[city]','$_POST[fee]')");
        $success_msg = "Student added successfully.";

    }

  }
  catch(Execption $e){
    $error_msg =$e->getMessage();
  }

 ?>



<!DOCTYPE html>
<html lang="en">
<!-- head started -->
<head>
<title>Add Students</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="main.css">
  <!-- Latest compiled and minified CSS -->
 >
   
  <link rel="stylesheet" href="styles.css" >
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
  <!-- Latest compiled and minified JavaScript -->

<style type="text/css">

  .message{
    padding: 10px;
    font-size: 15px;
    font-style: bold;
    color: black;
  }
</style>
</head>
<!-- head ended -->

<!-- body started -->
<body>
  <style type="text/css">
    /* Google Fonts Import Link */
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
form input[type="text"],input[type="email"],input[type="file"],input[type="date"], select, textarea {
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

form input[type=submit] {
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 50%;
}
input[type=submit]:hover{
  background-color: green;
}
#student_button{
  width: 300%;

}


  </style>

<header>
   <div class="sidebar close">
    <div class="logo-details">
<i class="fa fa-graduation-cap" aria-hidden="true"></i>
      <span class="logo_name">Student</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#index_new.php">
        <i class="fa fa-plus" aria-hidden="true"></i>

            <span class="link_name">Add Students</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Add Students</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="add_admin.php">
        <i class="fa fa-plus" aria-hidden="true"></i>

            <span class="link_name">Add Admin</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Add Admin</a></li>
        </ul>
      </li>
     
      
      <li>
    <div class="profile-details">
    
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['username'];?></div>
        


      </div>
      <a href="logout.php"><i class='bx bx-log-out' > </i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
          <p>Home</p>
       
          <div class="profile">

               <ul style="list-style:none;display: inline-flex;margin-left: 970px;margin-top: 10px;">

               
                 <li style="margin-top: 12px;margin-left: 10px;"><h4><?php echo $_SESSION['username'];?></h4></li>
                  <li style="margin-top: 14px;margin-left: 8px;"> <a href="logout.php"><i class='bx bx-log-out' > </i></a></li>
               </ul>
               
          </div>
    </div>
<center>
      <h1>Add Students Information</h1>
<!-- Error or Success Message printint started -->
<div class="message">
        <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
</div>
<!-- Error or Success Message printint ended -->

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="content">

  <div class="rowtwo" id="student">
  

       <form method="post" class="form-horizontal col-md-6 col-md-offset-3">

      <div class="form-group">
      
          <div class="col-sm-7">
            <input type="text" name="user_name"  class="form-control" id="input1" placeholder="Enter Student Username" / required>
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-7">
            <input type="text" name="password"  class="form-control" id="input1" placeholder="Enter Password" / required>
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="Enter email" / required>
          </div>
      </div>

      <div class="form-group">

          <div class="col-sm-7">
            <input type="text" name="name"  class="form-control" id="input1" placeholder="Enter Full Name" / required>
          </div>
      </div>

      <div class="form-group">

        <div class="col-sm-7">
      <input type="text" name="rollno"  class="form-control" id="input1" placeholder="Enter roll No" / required>
      </div>
      </div>

      <div class="form-group">
      
      <div class="col-sm-7">
        <input type="text" name="Course"  class="form-control" id="input1" placeholder="Course" / required>
      </div>
  </div>

  <div class="form-group">
      <div class="col-sm-7">
        <input type="text" name="Year"  class="form-control" id="input1" placeholder="Enter Year" / required>
      </div>
  </div>

  <div class="form-group">
      <div class="col-sm-7">
        <input type="date" name="DOB"  class="form-control" id="input1" placeholder="Enter DOB" / required>
      </div>
  </div>

  <div class="form-group">

      <div class="col-sm-7">
        <input type="text" name="number"  class="form-control" id="input1" placeholder="Enter Mobile Number" / required>
      </div>
  </div>

  <div class="form-group">

  <div class="col-sm-7">
  <input type="text" name="fathername"  class="form-control" id="input1" placeholder="Enter Father Name" / required>
  </div>
  </div>

  <div class="form-group">
      
    <div class="col-sm-7">
        <input type="text" name="mothername"  class="form-control" id="input1" placeholder="Enter Mother Name" / required>
      </div>
  </div>

  <div class="form-group">
      <div class="col-sm-7">
        <input type="text" name="gender"  class="form-control" id="input1" placeholder="gender" / required>
      </div>
  </div>

  <div class="form-group">

      <div class="col-sm-7">
        <input type="text" name="Address"  class="form-control" id="input1" placeholder="Enter  Student Address" / required>
      </div>
  </div>

  <div class="form-group">

    <div class="col-sm-7">
  <input type="text" name="Schoolname"  class="form-control" id="input1" placeholder="Enter School Name" / required>
  </div>
  </div>

  <div class="form-group">
      
      <div class="col-sm-7">
        <input type="text" name="attendence"  class="form-control" id="input1" placeholder="Enter Attendence" / required>
      </div>
  </div>

  <div class="form-group">
      <div class="col-sm-7">
        <input type="text" name="performance"  class="form-control" id="input1" placeholder="Enter performance" / required>
      </div>
  </div>

  <div class="form-group">
      <div class="col-sm-7">
        <input type="text" name="city"  class="form-control" id="input1" placeholder="Enter city" / required>
      </div>
  </div>

  <div class="form-group">

      <div class="col-sm-7">
        <input type="text" name="fee"  class="form-control" id="input1" placeholder="Enter fee" / required>
      </div>
  </div>

  
  <div class="form-group">
      <div class="col-sm-7">
        <input type="file" name="photo"  class="form-control" id="input1" placeholder="Choose Photo" / required>
      </div>
  </div>

      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Submit" name="button" />
    </form>
    
  </div>


</div><br>
<br>

<!-- Contents, Tables, Forms, Images ended -->

</center>

    



</header>


    <!-- Menus started-->
   
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

</body>
<!-- Body ended  -->
</html>
