<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="Attendance/css/index.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Student Login</title>  
    </head>
    <body>
        <div class="line">
        <h1>Student Portal</h1>
        </div>
        <div class="main">
            <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>
            <div class="form">
                <div class="img"> <img src="image/logo.png" alt="" class="form__img"></div>
                <form class="form__content" action="login.php" method="post">
                    <h1 class="form__title" style="margin-top: 0px;">Login<span style="font-size: 25px;margin: 12px;">Student | Parent</span></h1>


                 <?php if (isset($_GET['error'])) { ?>
                    <p class="error" style="color: white;text-align: center;background: #ff8080;padding: 10px;border-radius: 5px;"><?php echo $_GET['error']; ?></p>
                   <?php } ?>

                    <div class="form__div form__div-one" style="margin-top: 40px;">
                       <!-- <div class="form__icon">
                            <i class='bx bx-user'></i>
                        </div>-->

                        <div class="form__div-input">
                            <label for="" class="form__label">Username</label>
                            <input type="text" class="form__input" required name="uname" placeholder="Enter Your Email">
                        </div>
                    </div>

                    <div class="form__div">
                       <!-- <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>-->

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" class="form__input" required  name="password"  placeholder="Enter Your Password">
                        </div>
                    </div>
                   <!-- <a href="#" class="form__forgot">Forgot Password?</a>-->

                    <input type="submit" class="form__button" value="Login">

                   
                </form>
            </div>
           

        </div>
      
      
            
       </div>
       <footer>
        <h4>
            Copyright © Naivo3D Solutions Pvt Ltd 2024. All Rights Reserved
        </h4><br>
        <p>Designd by <span>Naivo3D Solutions Pvt Ltd</span></p>
       </footer>
       
       
        <script src="main.js"></script>
        <script type="text/javascript">
            setTimeout(function(){
        document.querySelector('.error').style.display = 'none';
      },3000);
        </script>
    </body>
</html>